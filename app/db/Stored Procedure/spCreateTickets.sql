-- qw

use sneakerness;

DROP PROCEDURE IF EXISTS spCreateTickets;

DELIMITER //

CREATE PROCEDURE spCreateTickets(
    IN Price_Id int
    ,IN Time_Id int
)

BEGIN

INSERT INTO Tickets
(
    Price_Id
    ,Time_Id
) VALUES (
     Price_Id
    ,Time_Id
);

SELECT LAST_INSERT_ID() AS Id;

END //

DELIMITER ;