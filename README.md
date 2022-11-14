# Mailgun settings
**Step 1**
<br>
First make a mail gun account from their official website <strong>https://www.mailgun.com/</strong>

<br>

**Step 2**
<br>
After making you account, head to the left hand section and choose the <strong>Sending</strong> 

**Step 3**
<br>
After selecting the sending option, you will find more sub-options and from those select the <strong>Domains</strong>

**Step 4**
<br>
After selecting the domains option, you will find you domain name which has been verified for you

**Step 5**
<br>
You now have to choose how you will send you mails, either by SMTP or API. Both of these configurations are <br>
provided when you click on your domain name 

**Step 6**
<br>
In my case, I went with the SMTP settings. When you click on the select button in the SMTP section, you will be <br>
provided with you SMTP settings. Integrate those settings in your Laravel environment file (.env). <br>
I have also sent a keys text file so that you can use those keys inside your .env file

**Step 7**
<br>
Before you can start sending mails, you would also need a verified account and this has to be an actual existing email account.<br>
For myself, I used my own google mail account and kept the sender and receiver my own account. <strong>https://help.mailgun.com/hc/en-us/articles/217531258</strong>

**Step 7**
<br>
Once you have a verified account, send you mail and you will get the mail in that account domain <br>
like if I have my personal gmail account as the verified user then the mail will be sent to me on my gmail.