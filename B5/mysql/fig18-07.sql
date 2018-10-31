-- lay du lieu voi productname bat dau = Fender
SELECT productName FROM products
WHERE productName LIKE 'Fender%'
-- lay du lieu voi product name co tu cast o vi tri bat ki
SELECT productName FROM products
WHERE productName LIKE '%cast%'
-- lay du lieu voi zipcode bat dau bang 076 va 2 ki tu bat ki tiep theo
SELECT zipCode FROM addresses
WHERE zipCode LIKE '076__'
-- lay du lieu voi oderdate bat dau voi 2010-06- 
SELECT orderDate FROM orders
WHERE orderDate LIKE '2010-06-__%'
-- tuong tu 2010-06-%