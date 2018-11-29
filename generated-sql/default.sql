
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- allsenators
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `allsenators`;

CREATE TABLE `allsenators`
(
    `ID` INTEGER NOT NULL AUTO_INCREMENT,
    `Name` VARCHAR(128) NOT NULL,
    `Party` VARCHAR(1) NOT NULL,
    `ImgURL` VARCHAR(500) NOT NULL,
    `Bio` VARCHAR(500) NOT NULL,
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- biography
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `biography`;

CREATE TABLE `biography`
(
    `ID` INTEGER NOT NULL AUTO_INCREMENT,
    `Born` VARCHAR(128) NOT NULL,
    `Age` INTEGER NOT NULL,
    `Spouse` VARCHAR(128) NOT NULL,
    `Education` VARCHAR(128) NOT NULL,
    `FK` INTEGER NOT NULL,
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- comments
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments`
(
    `ID` INTEGER NOT NULL AUTO_INCREMENT,
    `Comment` VARCHAR(1000) NOT NULL,
    `User` VARCHAR(50) NOT NULL,
    `Senator` INTEGER NOT NULL,
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- democrats
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `democrats`;

CREATE TABLE `democrats`
(
    `ID` INTEGER NOT NULL AUTO_INCREMENT,
    `Name` VARCHAR(128) NOT NULL,
    `State` VARCHAR(2) NOT NULL,
    `Class` VARCHAR(10) NOT NULL,
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- independents
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `independents`;

CREATE TABLE `independents`
(
    `ID` INTEGER NOT NULL AUTO_INCREMENT,
    `Name` VARCHAR(128) NOT NULL,
    `State` VARCHAR(2) NOT NULL,
    `Class` VARCHAR(10) NOT NULL,
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- key stances
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `key stances`;

CREATE TABLE `key stances`
(
    `ID` INTEGER(5) NOT NULL AUTO_INCREMENT,
    `HealthCare` VARCHAR(10000) NOT NULL,
    `GunControl` VARCHAR(10000) NOT NULL,
    `WomensRights` VARCHAR(10000) NOT NULL,
    `MilitarySpending` VARCHAR(10000) NOT NULL,
    `ForeignPolicy` VARCHAR(10000) NOT NULL,
    `Immigration` VARCHAR(10000) NOT NULL,
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- not_up_for_reelection
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `not_up_for_reelection`;

CREATE TABLE `not_up_for_reelection`
(
    `ID` INTEGER NOT NULL AUTO_INCREMENT,
    `Name` VARCHAR(128) NOT NULL,
    `State` VARCHAR(2) NOT NULL,
    `Party` VARCHAR(1) NOT NULL,
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- opponents
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `opponents`;

CREATE TABLE `opponents`
(
    `ID` INTEGER NOT NULL AUTO_INCREMENT,
    `Name` VARCHAR(50) NOT NULL,
    `Party` VARCHAR(1) NOT NULL,
    `State` VARCHAR(2) NOT NULL,
    `OpposingSenator` INTEGER(5) NOT NULL,
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- participation
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `participation`;

CREATE TABLE `participation`
(
    `ID` INTEGER NOT NULL AUTO_INCREMENT,
    `Votes Cast` INTEGER NOT NULL,
    `Sessions Attended` INTEGER NOT NULL,
    `Commitees` INTEGER NOT NULL,
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- republicans
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `republicans`;

CREATE TABLE `republicans`
(
    `ID` INTEGER NOT NULL AUTO_INCREMENT,
    `Name` VARCHAR(128) NOT NULL,
    `State` VARCHAR(2) NOT NULL,
    `Class` VARCHAR(10) NOT NULL,
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- upforreelection
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `upforreelection`;

CREATE TABLE `upforreelection`
(
    `ID` INTEGER(1) NOT NULL AUTO_INCREMENT,
    `Name` VARCHAR(50) NOT NULL,
    `State` VARCHAR(2) NOT NULL,
    `Party` VARCHAR(1) NOT NULL,
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- users
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(50) NOT NULL,
    `password_hash` VARCHAR(100) NOT NULL,
    `state` VARCHAR(2) NOT NULL,
    `Admin` VARCHAR(5) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
