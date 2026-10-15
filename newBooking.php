<html>


    <body> 
        <form method="POST" action="createNewBooking.php">
 	    Members ID: <?php include("createMemberDropdown.php"); ?> <br/>
	    Courd ID: <input type="text" name="courtID" /> <br/>
            Booking Date: <input type="date" name="bookingDate"/><br>
            Start Time: <input type="time" name="startTime"/><br>
            End Time: <input type="time" name="endTime"/><br>
            <input type="submit">
        </form>
    </body>
    #the drop down lets the user choose a member from the database. The user can then enter the court ID, booking date, start time and end time. When the user submits the form,
     #the data is sent to createNewBooking.php to be inserted into the database
</html>