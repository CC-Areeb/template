
# Introduction

In this read me file, I have noted down on how to setup your mailing system
with laravel and how to implement the environment variables for our mailing.

The environment variables are provided in a text file called **keys.txt** 
-

# Mailgun

- First make a mail gun account from their official website **https://www.mailgun.com**.
- After making you account, head to the left hand section and choose the **Sending** option.
- After selecting the sending option, you will find more sub-options and from those select the **Domains**.
- You now have to choose how you will send you mails, either by SMTP or API. Both of these configurations are provided when you click on your domain name.
- In my case, I went with the SMTP settings. When you click on the select button in the SMTP section, you will be provided with you SMTP settings. Integrate those settings in your Laravel environment file (.env).
- Before you can start sending mails, you would also need a verified account and this has to be an actual existing email account. For myself, I used my own google mail account and kept the sender and receiver my own account. **https://help.mailgun.com/hc/en-us/articles/217531258**
- Once you have a verified account, send you mail and you will get the mail in that account domain like if I have my personal gmail account as the verified user then the mail will be sent to me on my gmail.
---
# Mailtrap

- This set-up is simple, just open the mailtrap site **https://mailtrap.io**.
- Next make an account so that you can test you emails.
- After making your account, on the left side you will find a list of options. You can choose either home or sandbox.
- Once you choose one of the options, you need to find the inbox and click on it, it will open up a new page. Inside the new page you will see under the heading of inboxes **My inbox**.
- Click on the inbox and you will see the dashboard area where you will be shown the **Integrations** dropdown.Click on the dropdown and you will see that there are multiple options for multiple different languages, for myself I opt for php and laravel 7+
- Once you select you language, you will see the keys for your langauge so copy them and use it in your project.
---
# Sendgrid
- To make a sendgrid account, go to their office site **https://sendgrid.com**.
- Signup for free account and fill in the required details about yourself.
- Complete the set up by first authenticating you sender and reveiver by using an actual authentic account with valid domain.
- Once you have completed the set-up you will see some options on the left side and from there you need to choose **Email API**.
- Once you click on the email api, you will be redirected to a page where you have to select the setup method. For me, I went with the SMTP Relay.
- Now you have to input the name of you api key and click on the **Create Key** button. This is will generate your password which will be you api key you just made so make sure you have noted it down.
- Next apply your keys and you will be able to send message but make sure the sender and the receiver are the authenticated accounts you verified. Your sendgrid username is added by default as it is used for all accounts.

 
For further instructions use the link provided for sendgrid https://www.digitalocean.com/community/tutorials/how-to-create-a-laravel-contact-form-and-send-emails-with-sendgrid 
-


## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

***Mailgun***
\
`MAIL_MAILER=smtp`
\
`MAIL_HOST=smtp.mailgun.org`
\
`MAIL_PORT=587`
\
`MAIL_USERNAME=YOUR_USERNAME_FROM_MAILGUN`
\
`MAIL_PASSWORD=YOUR_PASSWORD_FROM_MAILGUN`
\
`MAIL_ENCRYPTION=tls`

***Mailtrap***
\
`MAIL_MAILER=smtp`
\
`MAIL_HOST=smtp.mailtrap.io`
\
`MAIL_PORT=2525`
\
`MAIL_USERNAME=YOUR_USERNAME_FROM_MAILTRAP`
\
`MAIL_PASSWORD=YOUR_PASSWORD_FROM_MAILTRAP`
\
`MAIL_ENCRYPTION=tls`

***Sendgrid***
\
`MAIL_MAILER=smtp`
\
`MAIL_HOST=smtp.sendgrid.net`
\
`MAIL_PORT=587`
\
`MAIL_USERNAME=apikey`
\
`MAIL_PASSWORD=sendgrid_api_key`
\
`MAIL_ENCRYPTION=tls`
## composer.json
Add these in your composer json file, inside autoload > psr-4
```javascript
"Areeb\\": "package/Areeb/src/",
"Areeb\\Mail\\": "package/Areeb/Mail/"
```
## app.php
Add the service provider
```php
/*
* Package Service Providers...
*/

Areeb\EmailingServiceProvider::class,
```