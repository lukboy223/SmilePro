-- pushes information from the form into the database in the visitor table

use sneakerness;

DROP PROCEDURE IF EXISTS spReadLocation;

DELIMITER //

CREATE PROCEDURE spReadLocation(
    IN LocationEvent varchar(50)
)

BEGIN

SELECT Id FROM Location
WHERE Location = LocationEvent;

END //

DELIMITER ;