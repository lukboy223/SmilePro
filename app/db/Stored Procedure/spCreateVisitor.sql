-- qw

use sneakerness;

DROP PROCEDURE IF EXISTS spCreateVisitor;

DELIMITER //

CREATE PROCEDURE spCreateVisitor(
    IN EventId          INT unsigned
    ,IN FirstName       VARCHAR(50)
    ,IN Infix           VARCHAR(10)
    ,IN LastName        VARCHAR(50)
    ,IN Email           VARCHAR(320)
    ,IN TAmount    INT unsigned
)

BEGIN

INSERT INTO Visitor
(
    EventId
    ,FirstName
    ,Infix
    ,LastName
    ,Email
    ,TicketAmount
) VALUES (
    EventId
    ,FirstName
    ,Infix
    ,LastName
    ,Email
    ,TAmount
);

SELECT LAST_INSERT_ID() AS Id;

END //

DELIMITER ;