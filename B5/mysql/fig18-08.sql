-- mac dinh tang dan
SELECT productName, listPrice, discountPercent
FROM products
WHERE listPrice < 500
ORDER BY productName
-- giam dan
SELECT productName, listPrice, discountPercent
FROM products
WHERE listPrice < 500
ORDER BY listPrice DESC
-- chi lay du lieu, khong the sap xep
SELECT productName, listPrice, discountPercent
FROM products
ORDER BY discountPercent, listPrice DESC