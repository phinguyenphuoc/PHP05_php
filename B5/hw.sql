-- c1:
SELECT * FROM products 
	INNER JOIN categories ON categories.categoryID=products.categoryID 
WHERE categories.categoryName = 'Guitars' AND products.listPrice > 500
-- c2:
SELECT * FROM products 
WHERE dateAdded LIKE '2014-07-%' AND listPrice > 300
ORDER BY listPrice DESC
-- c3:
SELECT * FROM products 
	INNER JOIN categories ON categories.categoryID=products.categoryID
WHERE categories.categoryName='Basses' AND products.productName LIKE '%o%'
ORDER BY products.productName DESC
-- c4:
SELECT * FROM products
    INNER JOIN orderitems ON orderitems.productID=products.productID
    INNER JOIN orders ON orders.orderID=orderitems.orderID
    INNER JOIN customers ON customers.customerID=orders.customerID
-- c5:
SELECT * FROM products WHERE dateAdded LIKE '2014%' AND listPrice > 300 
    ORDER BY listPrice DESC
    LIMIT 4
-- C6:
SELECT city FROM addresses
    INNER JOIN orders ON addresses.customerID=orders.customerID
    INNER JOIN orderitems ON orders.orderID=orderitems.orderID
    INNER JOIN products ON orderitems.productID=products.productID
WHERE products.productName='Yamaha FG700S'
