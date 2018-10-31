SELECT * FROM products;
-- lay du lieu productID, productName, listPrice tu bang product sap xep theo listprice
SELECT productID, productName, listPrice
FROM products
ORDER BY listPrice;

SELECT productID, productName, listPrice
FROM products
WHERE listPrice < 450
ORDER BY listPrice;

SELECT productID, productName, listPrice
FROM products
WHERE listPrice < 10;


