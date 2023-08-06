<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Taeshin Ushiroda (tu34)</td></tr>
<tr><td> <em>Generated: </em> 7/16/2023 6:36:57 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M23/it202-milestone1-deliverable/grade/tu34" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T07.40.35image.png.webp?alt=media&token=119ee4a3-6d32-49b6-8662-5866021b2d6b"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid email, password confirm<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T07.39.30image.png.webp?alt=media&token=ab639924-760f-45c5-b176-27bd8b7e00a0"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T07.41.29image.png.webp?alt=media&token=d6829a40-40b7-42d5-99b9-9d1271695de8"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email already in use<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T07.42.51image.png.webp?alt=media&token=be5c011d-3076-47a1-b05e-80eec905151c"/></td></tr>
<tr><td> <em>Caption:</em> <p>Username unavailable<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T07.46.51image.png.webp?alt=media&token=b8fd1fc3-0836-4c90-895e-aba1f6612145"/></td></tr>
<tr><td> <em>Caption:</em> <p>Valid form<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T07.47.49image.png.webp?alt=media&token=cb5afad6-4548-4f9e-9cba-925b09b52d6c"/></td></tr>
<tr><td> <em>Caption:</em> <p>User shown in table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/TaeshinUshiroda/IT202-451/pull/11">https://github.com/TaeshinUshiroda/IT202-451/pull/11</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <div>The form has four input fields for email, username, password, and confirm password.<br>Each field has the required attribute, meaning it has to be filled in<br>for the form to submit. The username field has a maxlength=30 attribute, limiting<br>the max characters to 30. Similarly, the password and confirm password fields have<br>the minlength=8 attribute, requiring at least 8 characters. Once everything fits the basic<br>front end validation, the form submits. On the backend side, first it's checked<br>that all the fields have values. Using a few given functions, the validity<br>of the email is checked, the validity of the username is checked, and<br>the password and confirm password field are compared. If anything is invalid, or<br>the the passwords don't match up, a short error message describing the problem<br>is queued and the information isn't saved. If everything's good, save the info<br>into the database.</div><div><br></div><div>Passwords are saved as hashes using the password_hash() function and the<br>PASSWORD_BCRYPT parameter. The hash is saved on the database, not the password itself.<br>Later, the hash can be used to verify the password.</div><div><br></div><div>The database is used<br>to save all user information. It saves the emails, username, unique id, and<br>dates created/modified. When needed, the database can be called upon to retrieve user<br>information.<br></div><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T08.16.31image.png.webp?alt=media&token=7cf8bff8-eaa7-4a6b-b057-b5ac0c7e3a05"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T08.17.15image.png.webp?alt=media&token=81c9f99d-f46f-4a24-b9b6-c51c69167906"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid email (user doesn&#39;t exist)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T08.21.44image.png.webp?alt=media&token=d0d88f7b-526c-4e31-ae5c-10d62406f992"/></td></tr>
<tr><td> <em>Caption:</em> <p>Welcomes the user that just logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/TaeshinUshiroda/IT202-451/pull/12">https://github.com/TaeshinUshiroda/IT202-451/pull/12</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <div>HTML form asks for two input fields, email and password.</div><div><br></div><div>For frontend, fields have<br>required attributes. Password also has minlength=8 attribute, so needs at least 8 characters.<br>Backend, if the email isn't valid or comparing the saved password hash to<br>the user input password results in a difference, flash an error and don't<br>login user. Since saved hash has the salt and encryption alg shown, by<br>running the same encryption on the user input password, the resulting hash can<br>be compared to saved database hash. Otherwise, set user session variable.</div><div><br></div><div>Database saves the<br>password hash from when the user made the account, and that hash is<br>retrieved to compare to user input password.<br></div><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T08.36.34image.png.webp?alt=media&token=97a430a7-361b-43d2-97c9-4cdb29a58795"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logged out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T08.37.08image.png.webp?alt=media&token=ddef0381-1024-437c-9b79-cc1d54faab2d"/></td></tr>
<tr><td> <em>Caption:</em> <p>Tried to directly access home.php<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/TaeshinUshiroda/IT202-451/pull/12">https://github.com/TaeshinUshiroda/IT202-451/pull/12</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>When a user logs into the site, the code starts a session for<br>the user. It creates a user session variable. By checking if the user<br>session variable has something, that determines if there&#39;s a user currently logged in.<br>When logging out, the user session is destroyed.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T17.15.43image.png.webp?alt=media&token=5b9b3611-d5c8-44f7-82cf-b95b7f9a1626"/></td></tr>
<tr><td> <em>Caption:</em> <p>Tried to go to home.php directly<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T21.04.29image.png.webp?alt=media&token=8cec6012-99e4-4139-ba74-0125760d7459"/></td></tr>
<tr><td> <em>Caption:</em> <p>Tried to go to an admin page without logging in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T21.21.08image.png.webp?alt=media&token=56d7c34a-4da6-4062-a823-65a17d7e0c9d"/></td></tr>
<tr><td> <em>Caption:</em> <p>Roles table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T21.21.30image.png.webp?alt=media&token=a69fe870-e8b1-4a03-a8da-2a54a9c5c785"/></td></tr>
<tr><td> <em>Caption:</em> <p>Admin user is the only one in the table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/TaeshinUshiroda/IT202-451/pull/51">https://github.com/TaeshinUshiroda/IT202-451/pull/51</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Using the is_logged_in() helper function, check if user is currently logged in. Basically<br>just checks if user session variable is set. If the user isn&#39;t logged<br>in, redirect them to the login page. Otherwise, do nothing.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Similar to logged in check, but instead uses the has_role() helper function with<br>&quot;Admin&quot; passed in. If the user is logged in, it checks the database<br>for the user&#39;s roles. If the user isn&#39;t an admin, redirect them to<br>the home page.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T21.27.44image.png.webp?alt=media&token=3486bf92-12a1-441f-a0ae-eb8efcd5d7b4"/></td></tr>
<tr><td> <em>Caption:</em> <p>css style<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/TaeshinUshiroda/IT202-451/pull/47">https://github.com/TaeshinUshiroda/IT202-451/pull/47</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <div>First off, for each the alert messages (though there aren't any here) I<br>added the color property and set it to black. This makes it easier<br>to read against the various colors. For the<span style="color: #d7ba7d;"> nav</span><span style="color: #d4d4d4;"><br></span><span style="color: #d7ba7d;">li</span> tags, I added a small margin to space out the<br>elements a bit and made the background color a dark gray to contrast<br>to the light text. Also changed the font family to Courier New. For<br>every<span style="color: #d7ba7d;"> input</span> element I added a small border to round it<br>out a bit. Changed the whole body background to a dark navy and<br>added some padding to all<span style="color: #d7ba7d;"> body</span><span style="color: #d4d4d4;"> </span><span style="color: #d7ba7d;">li</span><br>elements so the text has a larger and nicer looking background. Finally, for<span<br>style="color: #d7ba7d;"> th</span> and<span style="color: #d7ba7d;"> td</span> elements added a small border to<br>make the tables look like they have organization. Also centered the text in<br>them to make it look cleaner, plus gave a bit of padding so<br>there's a little whitespace between table columns.<br></div><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T21.45.37image.png.webp?alt=media&token=ddb00e87-c1d6-466c-b569-5a5b359d890e"/></td></tr>
<tr><td> <em>Caption:</em> <p>First<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T21.46.06image.png.webp?alt=media&token=20918885-c076-4a68-911e-9730b2d9fea7"/></td></tr>
<tr><td> <em>Caption:</em> <p>Second<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T21.46.36image.png.webp?alt=media&token=9de44976-7084-4bd1-ac1a-ea4642668f14"/></td></tr>
<tr><td> <em>Caption:</em> <p>Third<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/TaeshinUshiroda/IT202-451/pull/43">https://github.com/TaeshinUshiroda/IT202-451/pull/43</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>Made it clear to the user what the problem was in simple terms,<br>and didn&#39;t output any weird server-side error messages. Whenever an error is caught,<br>check the type of error it is and output a custom bit of<br>text that simply explains the issue.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T21.48.42image.png.webp?alt=media&token=69648c77-75fd-4abd-9bcc-54fb854ac9de"/></td></tr>
<tr><td> <em>Caption:</em> <p>The email and username were already there. Source: trust me.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/TaeshinUshiroda/IT202-451/pull/45">https://github.com/TaeshinUshiroda/IT202-451/pull/45</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>If the user is logged in, use the get_user_email() and get_username() helper functions<br>to get email and username respectively. They just pull data from the database<br>based on the user. In the form, add the<span style="color: #9cdcfe;"> value</span><span style="color:<br>#d4d4d4;">=</span> attribute and set it to the retrieved email and username for the<br>email and username fields respectively.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T22.00.03image.png.webp?alt=media&token=b8cadd44-0b46-4f96-8eba-d1fe645088eb"/></td></tr>
<tr><td> <em>Caption:</em> <p>Password mismatch<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T22.17.32image.png.webp?alt=media&token=0d5678d2-fa3c-405f-84a0-22ce61202446"/></td></tr>
<tr><td> <em>Caption:</em> <p>Everything was updated<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T22.18.17image.png.webp?alt=media&token=45c0ea45-7a9a-4079-9cd3-06ba7b39816a"/></td></tr>
<tr><td> <em>Caption:</em> <p>bad email<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T22.19.26image.png.webp?alt=media&token=b2d442b8-eaef-4123-bc31-ced19b3ae709"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T22.20.54image.png.webp?alt=media&token=b93b3b43-ae23-4c61-8199-1a2716af54c3"/></td></tr>
<tr><td> <em>Caption:</em> <p>Username was changed to okay<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/TaeshinUshiroda/IT202-451/pull/45">https://github.com/TaeshinUshiroda/IT202-451/pull/45</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>First, the input information is checked to be valid largely in the same<br>way as registration and login. If something&#39;s wrong, the request doesn&#39;t go through.<br>In addition though, it checks if the username or email is a repeat<br>of another already in the table. If everything is valid, then run SQL<br>statements to update the existing columns for the user.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T22.29.49image.png.webp?alt=media&token=be963e6f-a51f-4779-9753-0a5c307114f8"/></td></tr>
<tr><td> <em>Caption:</em> <p>First 3 issues<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T22.30.12image.png.webp?alt=media&token=5d33c3dd-3f60-40e9-a7c0-c54ea4973249"/></td></tr>
<tr><td> <em>Caption:</em> <p>3 more issues<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftu34%2F2023-07-16T22.30.26image.png.webp?alt=media&token=1ae38c3d-3f96-496b-8622-140e2da140d1"/></td></tr>
<tr><td> <em>Caption:</em> <p>Last 3 issues<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/TaeshinUshiroda/projects/1/views/1">https://github.com/users/TaeshinUshiroda/projects/1/views/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://tu34-prod.herokuapp.com/public_html/Project/login.php">https://tu34-prod.herokuapp.com/public_html/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M23/it202-milestone1-deliverable/grade/tu34" target="_blank">Grading</a></td></tr></table>