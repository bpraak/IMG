# IMG
 EndGem
 
 Since the website contains CDNs please use on a system with internet for full functionality.

1.) The website can be run on a localhost(XAMPP or any other server). If using a different host, user, password or database name please change the corrosponding details in the file "./include/db.php".

2.) The MySQL database is provided in the files with the name "IMG.sql". Import it in a database with the name "IMG" or follow the above instruction for a different database name.

3.) The site opens with the file "index.php" and will redirect to "leaf.php" since no user has logged in and if you open "index.php" having logged in earlier the page will not redirect.

4.) The page opens with sign in/register page both of which work using ajax.

5.) After signing in you will be greeted by the homepage with instructions i.e. choose respective branch and subject from side navigation bar. For the sake of testing I have included some files in the "Common Subjects > Introduction to Environmental Engineering".

6.) After that the posts under that subject will open with side tabs with "Notes" being the default. You can change between them without reloading the page since they have been binded using javascript tabs.

7.) The header containes three links, search box and your profile:-
   a)Home - Takes you to the Homepage
   b)Add Gem - Opens a new page where you can add post containing the ckeditor. The selection of subject loads data using ajax      after choosign branch.
   c)Top Gems - Opens a modal containing Top 10 posts with the most number of downloads in the decreasing order
   d)Search Box - Does a query search without reloading the page using ajax
   e)Profile - Your username and enrolment no. with a dropdown link containing the logout option.
   
8.) Clicking on the title or icon of a post opens a tab on a new page with details of that post.

9.) The Downnload Counter also works fine.

10.) The design is totally responsive and the side navigation bar hides into the three stripes icon.

 A live hosted version of my website is present here - "endgem.epizy.com" 
