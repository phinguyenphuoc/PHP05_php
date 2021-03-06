-- ca 2 dieu kien
SELECT productName, listPrice, discountPercent, categoryID
FROM products
WHERE categoryID = 1 AND discountPercent = 30;
-- chi can 1 dieu kien dung
SELECT productName, listPrice, discountPercent, categoryID
FROM products
WHERE categoryID = 1 OR discountPercent = 30;
-- phu dinh >= 500: <500
SELECT productName, listPrice
FROM products
WHERE NOT listPrice >= 500
-- giong o tren
SELECT productName, listPrice
FROM products
WHERE listPrice < 500

SELECT productName, listPrice, discountPercent, dateAdded
FROM products
WHERE dateAdded > '2010-07-01' 
OR listPrice < 500 AND discountPercent > 9

SELECT productName, listPrice, discountPercent, dateAdded
FROM products
WHERE (dateAdded > '2010-07-01' OR listPrice < 500)
AND discountPercent > 9