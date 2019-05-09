# Smsgateway for mr.sunarko assignment

this program is used for mr sunarko assignment in network programming course.
beware this program will use your phone credits to send the sms

# Use case
 
 Manually inserting your device id
 Send Single message 
 Send Multple message
 Typing your own messages / no templates

#Setup and installation

1. Goto: https://smsgateway.me/ and Signup.
	*email and password will be used to login to the app in your phone.
2. Download the application in https://apkpure.com/es/sms-gateway-api/networked.solutions.sms.gateway.api
	*the original app is no longer available in the playstore/ region lock but not sure.
3. Login to with your credentials in the app.
	*sometimes it kinda buggy and say wrong password, try changing your password in the web if that happen(personal experience). 
4. I assume you guys will use XAMPP so put download the the repo and put it on ~/XAMPP/htdocs/nameyourfolder

5. Goto: https://smsgateway.me/ login and then go to settings overthere u can get your API Token you can copy it now 

6. Open sendSms.php in a text editor and uncomment the $token = "your-api-token-here"; and put your token here. since you don't use the external files u might want to comment or delete the require_once('apitoken.php);
	*alternatively you can make a php file and paste the token there.

7. For the Device ID you can get the device id from the app of your phone or get it from the smsgateway web.

# Currently Working 
 *Currently trying to get a simple crud and getting number from mysqli database
 *Get Device Id form or something?
 *A working login system for the web? but its not a priority right now
 *CSS for the front end

#Documentation and Reference

https://github.com/hasahmad/HasSms
https://github.com/Ludplay/smsgatewayme-php-endpoint
https://smsgateway.me/sms-api-documentation/getting-started
Im using this two repos for the base 

#Personal note
 This assignment will be my first git repo. sorry for the inconviences, also i think i wont be accepting any pull request yet since im not that adept yet at branching build and git in overall
