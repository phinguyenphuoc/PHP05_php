
SELECT orderID, orderDate, shipDate
FROM orders
-- gia tri shipdate null thi lay ra
SELECT orderID, orderDate, shipDate
FROM orders 
WHERE shipDate IS NULL
--  gia tri khac null thi lay ra
SELECT orderID, orderDate, shipDate
FROM orders 
WHERE shipDate IS NOT NULL