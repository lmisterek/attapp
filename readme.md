# p4 - Attendance Administrator (attapp)


## Description
This web application is intended for teachers to create a course, upload a list of students,
and a roster will be displayed on the screen.  Teachers may then select a class and take attendance
for the course.  The attendance history for each student is then recorded in a database.

## Demo
<http://youtu.be/yDHdl6lzOKo?hd=1>

## Planning Document
<https://docs.google.com/spreadsheets/d/1XBwAHXP3AkuITo1PHWQEoW9X_YcnNUCyT6D-7Rk4Jgw/edit?usp=sharing>

## Details for teaching team
Both jill@harvard.edu and jamal@harvard.edu work as users, but I did not seed students, courses,
and records for both Jill and Jamal.  Use Jill's username and password to see an example with courses, students, and records.  There is a problem with the CSV upload of students at this time because the "id" field from the table is included and is unique.  The design needs to be improved.  For now, just add students using the "Add a Student" button.  

# CRUD Actions for a Course
After registering and logging in, you can CREATE a course by clicking on "Create a Class" in the navigation bar.  After submitting the form, you may edit and/or delete the course.  Or you can click on the Dashboard Link to view a list of courses.  You may click on "Edit" to UPDATE the course with any changes to the course.  To DESTROY the course, go to "View Course Details" from the Dashboard and then click on the red delete button.  To READ the details for an individual course, click on "View Course Details" from the Dashboard.    

# CRUD Actions for Students
You may CREATE students by selecting "View Roster" from a particular course in the Dashboard.  Then click on "Add a Student".  Eventually the goal would be to have instructors upload an excel document with students, but there are some details that need to be worked out.  You may READ students by selecting "View Roster" from a particular course in the Dashboard.  You may UPDATE students by downloading the CSV file and modifying the CSV file.  By importing the CSV file, the student information will be updated in the table.  This works, but there might be difficulty because of problems with the unique id number in a table.  Students can also be DELETED using this file.  

## Outside code
Many ideas were resourced from the following youtube videos, but each idea was adapted for my application.
https://www.youtube.com/watch?v=R8B4og-BeCk&list=PLwAKR305CRO-Q90J---jXVzbOd4CDRbVx
https://www.youtube.com/watch?v=rWjj9Slg1og&t=1086s
