CREATE TABLE users (
    userId INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    userName VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL,
    status TINYINT(1) NOT NULL,
    role   INT(2) NOT NULL
);

INSERT INTO users (userName, password, email, status, role) VALUES ('test1', 'pass1', 'test1@example.com', '1', '1');
INSERT INTO users (userName, password, email, status, role) VALUES ('test2', 'pass2', 'test2@example.com', '1', '2');
INSERT INTO users (userName, password, email, status, role) VALUES ('test3', 'pass3', 'test3@example.com', '1', '3');

CREATE TABLE users_role (
    roleId INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    roleName VARCHAR(128) NOT NULL
);

INSERT INTO users_role (roleName) VALUES ('Administrator');
INSERT INTO users_role (roleName) VALUES ('Accountant');
INSERT INTO users_role (roleName) VALUES ('Sales Manager');

CREATE TABLE users_status (
    statusId INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    statusName VARCHAR(128) NOT NULL
);

INSERT INTO users_status (statusName) VALUES ('Active');
INSERT INTO users_status (statusName) VALUES ('Inactive');

CREATE TABLE accounts (
    accountId INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    phone VARCHAR(80) NOT NULL,
    fax VARCHAR(80),
    website VARCHAR(255),
    industry INT(3) NOT NULL,
    accountType INT(3) NOT NULL,
    rating INT(2) NOT NULL,
    billingAddress TEXT,
    billingCountry VARCHAR(80) NOT NULL,
    shippingAddress TEXT,
    shippingCountry VARCHAR(80) NOT NULL,
    description TEXT,
    createdTime TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    modifiedTime DATETIME NOT NULL
);

INSERT INTO accounts (name, phone, fax, website, industry, accountType, rating, billingAddress, billingCountry, shippingAddress, shippingCountry) VALUES ('BriteStone Ltd', '+852 2410 4112', '+852 2709 3326', 'www.britestone.com.hk', '31', '3', '2', '5/F., Chinabest Industrial Centre, No.8, Kwai On Road, Kwai Chung', 'Hong Kong', '5/F., Chinabest Industrial Centre, No.8, Kwai On Road, Kwai Chung', 'Hong Kong');

CREATE TABLE accountsIndustry (
    industryId INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    industryName VARCHAR(80) NOT NULL
);

INSERT INTO accountsIndustry (industryName) VALUES ('Apparel');
INSERT INTO accountsIndustry (industryName) VALUES ('Backning');
INSERT INTO accountsIndustry (industryName) VALUES ('Biotechnology');
INSERT INTO accountsIndustry (industryName) VALUES ('Chemicals');
INSERT INTO accountsIndustry (industryName) VALUES ('Communications');
INSERT INTO accountsIndustry (industryName) VALUES ('Construction');
INSERT INTO accountsIndustry (industryName) VALUES ('Consulting');
INSERT INTO accountsIndustry (industryName) VALUES ('Education');
INSERT INTO accountsIndustry (industryName) VALUES ('Electronics');
INSERT INTO accountsIndustry (industryName) VALUES ('Energy');
INSERT INTO accountsIndustry (industryName) VALUES ('Engineering');
INSERT INTO accountsIndustry (industryName) VALUES ('Entertainment');
INSERT INTO accountsIndustry (industryName) VALUES ('Environmental');
INSERT INTO accountsIndustry (industryName) VALUES ('Finance');
INSERT INTO accountsIndustry (industryName) VALUES ('Food & Beverage');
INSERT INTO accountsIndustry (industryName) VALUES ('Government');
INSERT INTO accountsIndustry (industryName) VALUES ('Healthcare');
INSERT INTO accountsIndustry (industryName) VALUES ('Hospitality');
INSERT INTO accountsIndustry (industryName) VALUES ('Insurance');
INSERT INTO accountsIndustry (industryName) VALUES ('Machinery');
INSERT INTO accountsIndustry (industryName) VALUES ('Manufacturing');
INSERT INTO accountsIndustry (industryName) VALUES ('Media');
INSERT INTO accountsIndustry (industryName) VALUES ('Not For Profit');
INSERT INTO accountsIndustry (industryName) VALUES ('Other');
INSERT INTO accountsIndustry (industryName) VALUES ('Recreation');
INSERT INTO accountsIndustry (industryName) VALUES ('Retail');
INSERT INTO accountsIndustry (industryName) VALUES ('Shipping');
INSERT INTO accountsIndustry (industryName) VALUES ('Technology');
INSERT INTO accountsIndustry (industryName) VALUES ('Telecommunication');
INSERT INTO accountsIndustry (industryName) VALUES ('Transportation');
INSERT INTO accountsIndustry (industryName) VALUES ('Utilities');

CREATE TABLE accountsType (
    typeId INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    typeName VARCHAR(80) NOT NULL
);

INSERT INTO accountsType (typeName) VALUES ('Analyst');
INSERT INTO accountsType (typeName) VALUES ('Competitor');
INSERT INTO accountsType (typeName) VALUES ('Customer');
INSERT INTO accountsType (typeName) VALUES ('Integrator');
INSERT INTO accountsType (typeName) VALUES ('Investor');
INSERT INTO accountsType (typeName) VALUES ('Other');
INSERT INTO accountsType (typeName) VALUES ('Partner');
INSERT INTO accountsType (typeName) VALUES ('Press');
INSERT INTO accountsType (typeName) VALUES ('Prospect');
INSERT INTO accountsType (typeName) VALUES ('Reseller');

CREATE TABLE accountsRating (
    ratingId INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    ratingName VARCHAR(80) NOT NULL
);

INSERT INTO accountsRating (ratingId) VALUES ('--None--');
INSERT INTO accountsRating (ratingId) VALUES ('Acquired');
INSERT INTO accountsRating (ratingId) VALUES ('Active');
INSERT INTO accountsRating (ratingId) VALUES ('Market Failed');
INSERT INTO accountsRating (ratingId) VALUES ('Project Canceled');
INSERT INTO accountsRating (ratingId) VALUES ('Shutdown');

CREATE TABLE products (
    productId INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    status TINYINT(1) NOT NULL,
    category INT(3) NOT NULL,
    unitPrice DECIMAL(8,2) NOT NULL,
    stockQty INTEGER NOT NULL,
    description TEXT,
    createdTime TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    modifiedTime DATETIME NOT NULL 
);

CREATE TABLE productsStatus (
    statusId INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    statusName VARCHAR(80) NOT NULL
);

INSERT INTO productsStatus (statusName) VALUES ('Active');
INSERT INTO productsStatus (statusName) VALUES ('Inactive');

CREATE TABLE productsCategory (
    categoryId INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    categoryName VARCHAR(255) NOT NULL
);

INSERT INTO productsCategory (categoryName) VALUES ('--None--');
INSERT INTO productsCategory (categoryName) VALUES ('CRM Applications');
INSERT INTO productsCategory (categoryName) VALUES ('Hardware');
INSERT INTO productsCategory (categoryName) VALUES ('Software');

CREATE TABLE salesOrder (
    salesOrderId INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    subject VARCHAR(255) NOT NULL,
    accountName INT(10) NOT NULL,
    contactName VARCHAR(255) NOT NULL,
    status INT(2) NOT NULL,
    assignedTo INT(3) NOT NULL,
    billingAddress TEXT,
    billingCountry VARCHAR(80),
    shippingAddress TEXT,
    shippingCountry VARCHAR(80),
    termsConditions TEXT,
    description TEXT,
    createdTime TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    modifiedTime DATETIME NOT NULL
);

CREATE TABLE salesOrderProduct (
    salesOrderProductId INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    salesOrderId INTEGER NOT NULL,
    productName VARCHAR(255) NOT NULL,
    productDescription TEXT,
    qty INTEGER NOT NULL,
    listPrice INTEGER NOT NULL,
    tax INTEGER NOT NULL
);

CREATE TABLE salesInvoice (
    salesInvoiceId INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    invoiceNumber VARCHAR(80) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    invoiceDate DATE NOT NULL,
    dueDate DATE NOT NULL,
    accountName INT(10) NOT NULL,
    contactName VARCHAR(255) NOT NULL,
    status INT(2) NOT NULL,
    assignedTo INT(3) NOT NULL,
    billingAddress TEXT,
    billingCountry VARCHAR(80),
    shippingAddress TEXT,
    shippingCountry VARCHAR(80),
    termsConditions TEXT,
    description TEXT,
    createdTime TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    modifiedTime DATETIME NOT NULL
);

CREATE TABLE salesInvoiceProduct (
    salesInvoiceProductId INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    salesInvoiceId INTEGER NOT NULL,
    productName VARCHAR(255) NOT NULL,
    productDescription TEXT,
    qty INTEGER NOT NULL,
    listPrice INTEGER NOT NULL,
    tax INTEGER NOT NULL
);
