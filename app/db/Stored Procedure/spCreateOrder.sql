-- qw

use sneakerness;

DROP PROCEDURE IF EXISTS spCreateOrder;

DELIMITER //

CREATE PROCEDURE spCreateOrder(
    IN Ticket_Id int
    ,IN Visitor_Id int
)

BEGIN

INSERT INTO Orders
(
    Ticket_Id
    ,Visitor_Id
) VALUES (
     Ticket_Id
    ,Visitor_Id
);

END //

DELIMITER ;