-- aw
use sneakerness;

DROP PROCEDURE IF EXISTS spCreateGetEvent;

DELIMITER //

CREATE PROCEDURE spCreateGetEvent(
 
    IN Location_Id    INT unsigned
)

BEGIN

INSERT INTO Events
(
    Location_Id
) VALUES (
    Location_Id
);

SELECT LAST_INSERT_ID() AS Id;

END //

DELIMITER ;