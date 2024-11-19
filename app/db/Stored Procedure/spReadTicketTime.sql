-- pushes information from the form into the database in the visitor table

use sneakerness;

DROP PROCEDURE IF EXISTS spReadTicketTime;

DELIMITER //

CREATE PROCEDURE spReadTicketTime(
    IN Tdate    date
    ,IN Ttime    time
)

BEGIN

SELECT Id FROM ticketTime
WHERE DateOfEntry = Tdate AND EntranceTime = Ttime;

END //

DELIMITER ;