var AWS = require('aws-sdk');
var ses = new AWS.SES();
var googleRecaptcha = require('google-recaptcha');

var RECEIVER = process.env.RECEIVER;
var SENDER = process.env.SENDER;

var response = {
    "isBase64Encoded": false,
    "headers": { 'Content-Type': 'application/json', 'Access-Control-Allow-Origin': 'pulsemed.co.za' },
    "statusCode": 200,
    "body": "{\"result\": \"Success.\"}"
};


var captcha = new googleRecaptcha({
    secret: process.env.RECAPTCHA_SECRET_KEY
});



exports.handler = function (event, context) {
    let captchaResponse = event['g-recaptcha-response'];

    captcha.verify({ response: captchaResponse }, (error) => {

        if (error) {
            callback(error);
        }

        sendEmail(event, function (err, data) {
            context.done(err, null);
        });

    })

};


function sendEmail(event, done) {
    var params = {
        Destination: {
            ToAddresses: [
                RECEIVER
            ]
        },
        Message: {
            Body: {
                Text: {
                    Data: 'name: ' + event['your-name'] + '\ndoctor: ' + event.doctor + '\nphone: ' + event.tel + '\nemail: ' + event.email + '\nmedication:' + event.medication,
                    Charset: 'UTF-8'
                }
            },
            Subject: {
                Data: 'Website Inquiry: ' + event['your-name'],
                Charset: 'UTF-8'
            }
        },
        Source: SENDER
    };
    ses.sendEmail(params, done);
}