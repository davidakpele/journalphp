-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3 

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skybase`
--

-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS skybase;

CREATE TABLE IF NOT EXISTS `users`(
    `#` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
    `userid` VARCHAR(51) UNIQUE NOT NULL,
    `institute_name` TEXT NOT NULL,
    `email` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `password` VARCHAR(150) COLLATE utf8mb4_unicode_ci NOT NULL,
    `join` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE = InnoDB DEFAULT CHARSET = latin1;

CREATE TABLE IF NOT EXISTS `package`(
    `#` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
    `packageid` VARCHAR(50) UNIQUE NOT NULL,
    `package_name` VARCHAR (200) COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE = InnoDB DEFAULT CHARSET = latin1;

INSERT INTO `package`(`packageid`, `package_name`) VALUE ('603', 'Premium Package');
INSERT INTO `package`(`packageid`, `package_name`) VALUE ('604', 'Compact Package');
INSERT INTO `package`(`packageid`, `package_name`) VALUE ('605', 'Small Package');

CREATE TABLE IF NOT EXISTS `user_subscription`(
    `#` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
    `subcriptionid` VARCHAR(51) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
    `package_id` TEXT NOT NULL,
    `user_id` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `subscription_date` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `expire_date` DATE,
    `user_token` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE = InnoDB DEFAULT CHARSET = latin1;

CREATE TABLE IF NOT EXISTS `subjects`(
    `#` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
    `subjectid` VARCHAR(50) UNIQUE NOT NULL,
    `package_id` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `subjects_name` TEXT
)ENGINE = InnoDB DEFAULT CHARSET = latin1;


INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('101', '603', 'Arts and Humanities');
INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('102', '603', 'Biological Sciences');
INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('103', '603', 'Biomedical and Health Sciences');

INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('104', '603', 'Business and Economics');
INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('105', '603', 'Earth and Environmental Sciences');
INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('106', '603', 'Engineering and Technology');

INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('107', '603', 'History');
INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('108', '603', 'Law and Legal Studies');
INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('109', '603', 'Mathematics and Statistics');

INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('110', '603', 'Philosophy and Religion');
INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('111', '603', 'Physics, Chemistry and Astronomy');
INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('112', '603', 'Social Science and Behavioral Science');
INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('113', '603', 'Health Services Administration');

INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('114', '604', 'Core Title Lists');
INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('115', '604', 'Mathematical and Physical Sciences');
INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('116', '604', 'Medical Science and Biomedicine');
INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('117', '604', 'Medical Specialties');

INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('118', '604', 'Molecular and Medical Biology');
INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('119', '604', 'Nursing and Allied Health');
INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('120', '604', 'Pharmacy and Pharmacology');
INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('121', '604', 'Physical Therapy and Rehabilitation');

INSERT INTO `subjects`(`subjectid`, `package_id`, `subjects_name`) VALUE ('122', '604', 'Psychiatry and Psychology');



CREATE TABLE IF NOT EXISTS `categories`(
    `categoriesid` TINYINT(10) PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
    `subjectid` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `categories_name` TEXT
)ENGINE = InnoDB DEFAULT CHARSET = latin1;


INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('101', 'Architecture');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('101', 'Art and Design');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('101', 'Arts and Humanities, General/Interdisciplinary');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('101', 'Classical Studies');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('101', 'Creative Writing');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('101', 'Film and Media Studies');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('101', 'Fine Arts');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('101', 'Literature');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('101', 'Medieval/Renaissance Studies');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('101', 'Music');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('101', 'Theatre and Performance Studies');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('102', 'Agriculture');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('102', 'Anatomy and Physiology');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('102', 'Biological Sciences, General/Interdisciplinary');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('102', 'Ecology and Evolutionary Biology');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('102', 'Food Science');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('102', 'Forest Sciences');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('102', 'Genetics and Genomics');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('102', 'Microbiology');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('102', 'Molecular, Cellular and Developmental Biology');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('102', 'Neuroscience');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('102', 'Plant Sciences/Botany');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('102', 'Zoology and Animal Sciences');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Biomedical and Health Sciences, General/Interdisciplinary');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Communication Sciences and Disorders');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Core Medical Title Lists');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Dentistry');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Diseases');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Health Care Services');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Kinesiology');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Medical Biology');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Medical Practice');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Medical Science');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Medical Specialties A-N');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Medical Specialties O-Z');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Nursing');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Nutrition');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Oncology');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Pharmacology, Toxicology and Environmental Health');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Pharmacy and Pharmaceutical Sciences');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Psychiatry');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Public Health');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Rehabilitation and Therapy');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Safety Science');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Surgery');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('103', 'Veterinary Medicine');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('104', 'Business');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('104', 'Economics');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('104', 'Marketing and Sales');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('105', 'Aquatic Sciences');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('105', 'Environmental Health and Protection');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('105', 'Environmental Science, General/Interdisciplinary');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('105', 'Geosciences');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('105', 'Natural Resources Management');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('105', 'Oceanography and Atmospheric Sciences');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('106', 'Aerospace Engineering');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('106', 'Biomedical Engineering and Bioengineering');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('106', 'Chemical Engineering');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('106', 'Civil and Environmental Engineering');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('106', 'Computational Engineering & Science');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('106', 'Computer and Information Science');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('106', 'Electrical and Computer Engineering');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('106', 'Engineering and Technology, General/Interdisciplinary');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('106', 'Materials Science');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('106', 'Mechanical Engineering');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('106', 'Mining, Petroleum and Power Sources');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('106', 'Nanoscience and Nanotechnology');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('106', 'Nuclear Engineering');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('106', 'Operations Research, Systems Engineering and Industrial Engineering');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('107', 'History by Time Period');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('107', 'History - General');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('107', 'History of Geographic Regions');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('107', 'Social History');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('108', 'Law: Fields of Law');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('108', 'Law: Professional Interest');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('108', 'Legal System');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('108', 'History by Time Period');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('109', 'Applied Mathematics');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('109', 'Pure Mathematics');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('109', 'Statistics and Probability');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('110', 'Philosophy');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('110', 'Religion');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('111', 'Astronomy & Space Science');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('111', 'Chemistry');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('111', 'Physics');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('111', 'Physics, Chemistry and Astronomy - General/Interdisciplinary');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('112', 'Anthropology');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('112', 'Communication and Journalism');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('112', 'Criminology and Criminal Justice');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('112', 'Education');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('112', 'Ethnic, Race, and Gender Studies');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('112', 'Geography');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('112', 'International and Area Studies');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('112', 'Library and Information Science');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('112', 'Linguistics');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('112', 'Political Science');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('112', 'Psychology');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('112', 'Public Affairs, Public Policy and Public Administration');

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('112', 'Social Science and Behavioral Science, General');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('112', 'Social Work');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('112', 'Psychology');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('112', 'Sociology');

CREATE TABLE IF NOT EXISTS `bookshelves`( 
    `bookshelvesid` INT(253) PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
    `categoriesid` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `bookshelves_name` TEXT
)ENGINE = InnoDB DEFAULT CHARSET = latin1;


INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('1', 'Architectural History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('1', 'Architecture - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('1', 'Architecture - Teaching and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('1', 'Historic Preservation and Cultural Resource Management');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('1', 'Landscape Architecture');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('1', 'Urban, Community and Regional Planning');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('2', 'Art and Design - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('2', 'Art and Design - Teaching and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('2', 'Fashion and Textiles');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('2', 'Graphic Design');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('3', 'Africana Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('3', 'Arts and Humanities - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('3', 'Cultural Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('3', 'Digital Humanities');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('3', 'Race, Ethnicity and Postcolonial Studies');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('4', 'Classical Studies - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('4', 'Classical Studies - History and Archaeology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('4', 'Classical Studies - Literature and Philology');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('5', 'Creative Writing - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('5', 'Fiction');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('5', 'Nonfiction');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('5', 'Poetry');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('6', 'Audio Arts and Acoustics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('6', 'Film and Media Studies - Teaching and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('6', 'Pigments, Perfumes and Cosmetics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('6', 'Film Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('6', 'Television');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('7', 'Aesthetics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('7', 'Art Criticism');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('7', 'Art Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('7', 'Art History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('7', 'Fine Arts Conservation');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('7', 'Fine Arts - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('7', 'Fine Arts - Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('7', 'Museums and Museum Management');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('8', 'African Literature');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('8', 'American Literature');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('8', 'Ancient Literature');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('8', 'Asian Literature');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('8', "Children's Literature");
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('8', 'Comparative Literature');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('8', 'English Literature');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('8', 'French and Francophone Literature');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('8', 'Germanic Literature');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('8', 'Italian Literature');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('8', 'Latin American Literature');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('8', 'Literary Theory and Criticism');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('8', 'Literature - General');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('8', 'Modern Literature');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('8', 'Romance Literature');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('8', 'Semitic Literature');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('8', 'Slavic Literature');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('8', 'Spanish and Portuguese Literature');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('9', 'Medieval and Renaissance Studies');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('10', 'Music Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('10', 'Music - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('10', 'Musicology and Ethnomusicology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('10', 'Music Performance');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('10', 'Music Theory');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('10', 'Music Therap');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('11', 'Dance');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('11', 'Dramatic Literature, Criticism and Theory');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('11', 'Playwriting');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('11', 'Theatre and Performance Studies - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('11', 'Theatre and Performance Studies - Teaching and Professional Issues');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('12', 'Agribusiness');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('12', 'Agricultural Law and Policy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('12', 'Agricultural Research');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('12', 'Agricultural Technology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('12', 'Agriculture - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('12', 'Agronomy and Crop Sciences');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('12', 'Animal Science and Animal Products');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('12', 'Aquaculture, Fish, and Fisheries');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('12', 'Breeding and Genetic Improvement');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('12', 'Dairy Science');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('12', 'Farms and Farming Systems');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('12', 'Horticulture');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('12', 'Pest Control and Entomology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('12', 'Plant Science and Plant Products');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('13', 'Anatomy - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('13', 'Cardiovascular Physiology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('13', 'Comparative and Evolutionary Physiology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('13', 'Gastrointestinal and Renal Physiology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('13', 'Histology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('13', 'Physiology - General/Interdisciplinary');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('14', 'Bioinformatics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('14', 'Biological Chemistry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('14', 'Biological Sciences - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('14', 'Biophysics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('14', 'Biotechnology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('14', 'Marine Biology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('14', 'Microscopy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('14', 'Systems Biology');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', 'Behavior and Ethology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', 'Ecology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', 'Evolutionary Biology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', 'Population Biology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', 'Terrestrial and Aquatic Ecology');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('16', 'Food and Nutrition');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('16', 'Food Chemistry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('16', 'Food Microbiology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('16', 'Food Safety and Food Security');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('16', 'Food Science - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('16', 'Food Technology/Biotechnology');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('17', 'Forest Biology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('17', 'Forest Management');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('17', 'Forest Research');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('17', 'Forestry and Forest Sciences - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('17', 'Wood Science and Technology');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('18', 'Epigenetics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('18', 'Genetics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('18', 'Genomics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('18', 'Human and Behavioral Genetics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('18', 'Immunogenetics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('18', 'Medical Genetics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('18', 'Molecular Genetics');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('19', 'Bacteriology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('19', 'Clinical Microbiology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('19', 'Environmental Microbiology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('19', 'Microbiology - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('19', 'Mycology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('19', 'Parasitology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('19', 'Phycology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('19', 'Virology');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('20', 'Amino Acids, Peptides, and Proteins');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('20', 'Biology of Cancer');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('20', 'Carbohydrates');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('20', 'Cell and Developmental Biology - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('20', 'Cell Biology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('20', 'Cell Signaling');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('20', 'Developmental Biology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('20', 'Lipids');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('20', 'Molecular Biology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('20', 'Nucleic Acids, Nucleotides, and Nucleosides');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('20', 'Stem Cell Biology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('20', 'Structural Biology');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('21', 'Behavioral Neuroscience');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('21', 'Cognitive Neuroscience');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('21', 'Computational Neuroscience');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('21', 'Developmental Neuroscience');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('21', 'Molecular and Cellular Neuroscience');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('21', 'Neurobiology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('21', 'Neurochemistry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('21', 'Neurophysiology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('21', 'Neuroscience - General');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('21', 'Systems Neuroscienc');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('22', 'Plant Anatomy and Physiology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('22', 'Plant Biology and Chemistry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('22', 'Plant Breeding and Genetics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('22', 'Plant Ecology, Evolution, and Systematics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('22', 'Plant Pathology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('22', 'Plant Sciences/Botany - General/Interdisciplinary');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('23', 'Animal Behavior');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('23', 'Animal Biology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('23', 'Animal Diseases');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('23', 'Animal Reproduction and Genetics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('23', 'Animal Sciences - General');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('23', 'Entomology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('23', 'Herpetology and Ichthyology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('23', 'Invertebrates');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('23', 'Mammalogy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('23', 'Ornithology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('23', 'Primatology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('23', 'Zoological Systematics and Evolution');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('23', 'Zoology - General/Interdisciplinary');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('24', 'Biomedical and Health Sciences - General/Interdisciplinary');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('25', 'Audiology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('25', 'Communication Sciences and Disorders - General');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('25', 'Rehabilitative Audiology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('25', 'Speech-Language Pathology/Logopedics');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('26', 'Core Public Health Journals, v2.0: Essential and Research Level Core');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('26', 'Abridged Index Medicus/Core Clinical List');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('27', 'Dental Materials');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('27', 'Dental Public Health and Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('27', 'Dentistry - Education and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('27', 'Dentistry - General');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('27', 'Endodontics and Endodontology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('27', 'Oral and Maxillofacial Surgery');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('27', 'Oral Biology and Oral Pathology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('27', 'Orthodontics and Orthodontology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('27', 'Pediatric Dentistry and Pedodontics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('27', 'Periodontics and Periodontology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('27', 'Prosthodontics and Prosthodontology');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'AIDS and HIV');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'Bacterial Infections and Mycoses');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'Cardiovascular Diseases');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'Congenital, Hereditary, and Neonatal Disorders');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'Digestive System Disorders');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'Endocrine and Metabolic Disorders');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'Eye Diseases');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'Hemic and Lymphatic Diseases');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'Immune System Diseases');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'Infectious and Tropical Diseases');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'Musculoskeletal Diseases');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'Neurological Diseases');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'Nutritional and Eating Disorders');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'Otorhinolaryngologic Diseases');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'Parasitic Diseases');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'Respiratory Tract Diseases');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'Sexually Transmitted Diseases');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'Skin and Connective Tissue Diseases');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'Urogenital Diseases');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('28', 'Viral Diseases');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('29', 'Health Care Services Technologies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('29', 'Health Policy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('29', 'Health Services Administration');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('29', 'Health Services and Outcomes Research');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('29', 'Home Health Care');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('29', 'Hospital Administration and Care');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('30', 'Biomechanics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('30', 'Exercise Physiology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('30', 'Exercise Science');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('30', 'Kinesiology - General');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('30', 'Motor Control');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('31', 'Medical Biochemistry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('31', 'Medical Cell Biology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('31', 'Medical Microbiology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('31', 'Medical Molecular Biology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('31', 'Medical Neurobiology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('31', 'Medical Pathology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('31', 'Medical Toxicology');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('32', 'Medical Caregiving');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('32', 'Medical Diagnosis');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('32', 'Medical Education and Training');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('32', 'Medical Ethics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('32', 'Medical Instruments and Supplies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('32', 'Medical Practice Management');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('33', 'Basic Medical Science');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('33', 'Clinical Anatomy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('33', 'Clinical Neuroscience');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('33', 'General Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('33', 'Laboratory Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('33', 'Medical Informatics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('33', 'Medical Pharmacology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('33', 'Medical Research');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('33', 'Translational Medicine');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Addiction Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Allergy, Immunology, and Immunotherapy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Alternative and Complementary Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Anesthesiology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Burn and Wound Care');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Cardiology and Vascular Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Clinical Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Critical Care');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Dermatology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Emergency and Disaster Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Endocrinology, Diabetes, and Metabolism');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Evidence-Based Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Family Practice');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Forensic Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Gastroenterology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Geriatrics and Gerontology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Hematology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Hepatology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Holistic and Integrative Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Internal Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', "Men's Health");
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Nephrology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('34', 'Neurology');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Obstetrics and Gynecology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Ophthalmology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Optometry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Orthopedics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Osteopathic Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Otolaryngology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Pain Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Palliative and Terminal Care');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Pathology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Pediatrics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Perinatology and Neonatology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Physical Medicine and Rehabilitation');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Podiatry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Preventive Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Primary Care');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Pulmonary and Respiratory Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Radiology, Nuclear Medicine and Medical Imaging');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Regenerative Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Reproductive Medicine and Sexual Health');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Rheumatology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Sleep Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Sports Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', 'Urology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('35', "Women's Health");

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('36', 'Critical Care Nursing');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('36', 'Emergency Nursing');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('36', 'Geriatric Nursing');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('36', 'Maternal, Pediatric, and Neonatal Nursing');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('36', 'Nursing Administration');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('36', 'Nursing - Education and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('36', 'Nursing - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('36', 'Nursing Midwifery');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('36', 'Nursing Research');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('36', 'Oncology Nursing');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('36', 'Psychiatric and Mental Health Nursing');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('36', 'Public Health and Community Nursing');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('36', 'Surgical Nursing');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('37', 'Dietetics and Clinical Nutrition');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('37', 'International and Community Nutrition');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('37', 'Molecular, Genetic, and Biochemical Nutrition');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('37', 'Nutrition - General');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('38', 'Breast Cancer');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('38', 'Cancer and Genetics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('38', 'Cancer Biology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('38', 'Cancer Epidemiology and Prevention');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('38', 'Cancer Therapeutics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('38', 'Clinical Oncology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('38', 'Gastrointestinal/Colorectal Cancer');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('38', 'Genitourinary Cancer');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('38', 'Gynecologic Oncology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('38', 'Head, Neck and Oral Oncology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('38', 'Hematological Oncology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('38', 'Leukemia and Lymphoma');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('38', 'Medical Oncology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('38', 'Neoplasms');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('38', 'Palliative and Supportive Care');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('38', 'Pediatric and Adolescent Oncology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('38', 'Radiation Oncology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('38', 'Surgical Oncology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('38', 'Thoracic Cancer');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('39', 'Environmental Pharmacology and Toxicology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('39', 'Neuropharmacology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('39', 'Pharmacology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('39', 'Toxicology');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('40', 'Hospital and Health System Pharmacies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('40', 'Medicinal and Pharmaceutical Chemistry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('40', 'Natural Products Chemistry and Pharmacognosy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('40', 'Pharmaceutics and Drug Design');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('40', 'Pharmacoeconomics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('40', 'Pharmacy Administration, Policy and Regulation');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('40', 'Pharmacy and Pharmaceutical Science - General');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('40', 'Pharmacy Education and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('40', 'Vaccines and Antiviruses');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('41', 'Child and Adolescent Psychiatry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('41', 'Clinical Psychiatry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('41', 'Forensic Psychiatry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('41', 'Geriatric Psychiatry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('41', 'Intellectual and Learning Disabilities');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('41', 'Mental Disorders');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('41', 'Neuropsychiatry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('41', 'Psychiatry - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('41', 'Psychiatry Training and Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('41', 'Psychosomatic Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('41', 'Social Psychiatry');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('42', 'Biostatistics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('42', 'Community Health and Preventive Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('42', 'Environmental Health');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('42', 'Epidemiology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('42', 'Global Public Health');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('42', 'Mental and Social Health');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('42', 'Occupational Health and Industrial Hygiene');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('42', 'One Health');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('42', 'Public Health Education and Promotion');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('42', 'Public Health - General');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('42', 'Substance Abuse and Addiction Prevention');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('43', 'Movement and Mind-Body Therapies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('43', 'Neurorehabilitation');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('43', 'Occupational Therapy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('43', 'Orthotics and Prosthetics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('43', 'Physical Therapy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('43', 'Rehabilitation and Therapy - General');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('43', 'Training in Rehabilitation and Therapy');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('44', 'Safety Science, Genera');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('45', 'Cardiovascular Surgery');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('45', 'Cutaneous and Dermatologic Surgery');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('45', 'Gastrointestinal and Urologic Surgery');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('45', 'Hand Surgery');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('45', 'Neurosurgery');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('45', 'Oncology Surgery');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('45', 'Orthopedic Surgery');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('45', 'Otolaryngologic Surgery');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('45', 'Pediatric Surgery');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('45', 'Plastic and Reconstructive Surgery');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('45', 'Podiatric Surgery');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('45', 'Surgery - General');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('45', 'Surgical Techniques');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('45', 'Surgical Training and Education');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('46', 'Laboratory Animal Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('46', 'Large or Food Animal Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('46', 'MLA VMLS Basic List of Veterinary Medical Serials');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('46', 'Small or Companion Animal Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('46', 'Veterinary Diseases');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('46', 'Veterinary Education and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('46', 'Veterinary Medicine - General');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('46', 'Veterinary Microbiology and Immunobiology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('46', 'Veterinary Pathology and Epidemiology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('46', 'Veterinary Pharmacology and Therapeutics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('46', 'Veterinary Radiology');


INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Accounting');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Business Administration and Management');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Business Communication');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Business Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Business Ethics and Public Responsibility');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'E-Commerce');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Entrepreneurship and Small Business');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Finance and Insurance');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Hospitality and Tourism');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Human Resources Management');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Industrial and Labor Relations');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'International and Global Business');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Leadership and Strategic Management');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Logistics and Operations');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Management and Nonprofit Organizations');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Management Information Systems');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Management Sciences and Quantitative Methods');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Organizational Behavior and Theory');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Real Estate and Housing');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Retail and Service Industries');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Social Entrepreneurship');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Sport Management');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('47', 'Total Quality Management');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('48', 'Agricultural and Resource Economics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('48', 'Business Economics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('48', 'Econometrics and Quantitative Methods');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('48', 'Economic Policy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('48', 'Economics - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('48', 'Economics - Teaching and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('48', 'Economic Systems');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('48', 'Economic Theory');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('48', 'Financial Economics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('48', 'Health, Education, and Welfare');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('48', 'Industrial Organization');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('48', 'International Economics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('48', 'Investing and the Stock Market');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('48', 'Labor Economics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('48', 'Macroeconomics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('48', 'Microeconomics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('48', 'Public Economics and Social Economics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('48', 'Urban, Rural, and Regional Economies');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('49', 'Advertising');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('49', 'Marketing by Industry Type');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('49', 'Marketing - General');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('49', 'Sales and Merchandising');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('50', 'Aquatic Ecology and Ecosystems');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('50', 'Aquatic Sciences - General');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('50', 'Fish, Fisheries, and Aquaculture');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('50', 'Limnology');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('51', 'Climate Change');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('51', 'Environmental Health and Protection - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('51', 'Environmental Indicators and Impact Assessment');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('51', 'Environmental Law and Policy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('51', 'Environmental Toxicology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('51', 'Hazardous Waste and Waste Management');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('51', 'Monitoring and Environmental Analysis');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('51', 'Water, Air, and Soil Pollution');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('52', 'Environmental Science - General/Interdisciplinary');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('53', 'Engineering Geology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('53', 'Geochemistry and Biogeochemistry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('53', 'Geodesy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('53', 'Geological Modeling and Methods');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('53', 'Geology - General');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('53', 'Geomorphology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('53', 'Geophysics and Seismology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('53', 'Geosciences - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('53', 'Glaciology and Quaternary Science');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('53', 'Hydrogeology and Hydrology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('53', 'Mineralogy and Petrology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('53', 'Mining Geology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('53', 'Paleontology and Stratigraphy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('53', 'Petroleum Geology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('53', 'Polar Science');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('53', 'Sedimentology and Soil Science');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('53', 'Tectonics and Structural Geology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('53', 'Volcanology');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('54', 'Energy Resources and Conservation');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('54', 'Human - Environment Interaction');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('54', 'Natural Resources Conservation and Biodiversity');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('54', 'Natural Resources Management and Policy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('54', 'Natural Resources Management - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('54', 'Sustainability');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('54', 'Water Resource Management');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('55', 'Atmospheric Chemistry and Physics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('55', 'Atmospheric Sciences - General');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('55', 'Biological and Chemical Oceanography');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('55', 'Chemical Oceanography');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('55', 'Climatology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('55', 'Marine Geology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('55', 'Marine Technology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('55', 'Meteorology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('55', 'Oceanography - General');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('55', 'Physical Oceanography');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('56', 'Aeronautical Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('56', 'Aerospace Engineering - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('56', 'Astronautical Engineering');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('57', 'Bioengineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('57', 'Bioimaging and Biomedical Optics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('57', 'Biomaterials');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('57', 'Biomechanics/Biotransport');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('57', 'Biomedical Engineering - General');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('57', 'Biomedical Engineering - Teaching and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('57', 'Molecular, Cellular, and Tissue Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('57', 'Nanomedicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('57', 'Neuroengineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('57', 'Rehabilitation Engineering');


INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('58', 'Biochemical Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('58', 'Catalysis and Reaction Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('58', 'Chemical Engineering - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('58', 'Chemical Engineering - Teaching and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('58', 'Heat Transfer/Thermodynamics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('58', 'Process Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('58', 'Separation Science');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('59', 'Civil Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('59', 'Construction Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('59', 'Earthquake Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('59', 'Environmental Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('59', 'Geotechnical Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('59', 'Hydraulic and Hydrologic Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('59', 'Structural Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('59', 'Transportation Engineering');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('60', 'Computational Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('60', 'Computational Science');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('60', 'Computer Modeling');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('60', 'Informatics');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('61', 'Applied Computing');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('61', 'Artificial Intelligence/Robotics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('61', 'Computer and Information Science - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('61', 'Computer and Systems Architecture');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('61', 'Computer Science - Education and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('61', 'Computer Security and Cryptography');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('61', 'Computer Vision');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('61', 'Databases/Information Systems');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('61', 'Data Mining and Data Sets');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('61', 'Human Computer Interaction/Graphics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('61', 'Internet Technology/Information Technology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('61', 'Mobile and Cloud Computing');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('61', 'Networks');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('61', 'Numerical Analysis/Scientific Computing');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('62', 'Computer Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('62', 'Controls and Control Theory');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('62', 'Digital Circuits');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('62', 'Digital Communications and Networking');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('62', 'Electrical Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('62', 'Electrical Engineering - Teaching and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('62', 'Electrical Power and Energy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('62', 'Electromagnetics and Photonics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('62', 'Electronic Devices and Semiconductors');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('62', 'Electronics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('62', 'Embedded/Hardware Systems');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('62', 'Nanotechnology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('62', 'Robotics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('62', 'Sensors and Remote Sensing');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('62', 'Signal Processing');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('62', 'Systems, Electrical Engineering');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('63', 'Engineering Analysis and Design');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('63', 'Engineering and Technology - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('63', 'Engineering Measurement and Instrumentation');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('64', 'Adhesives');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('64', 'Biological and Biomimetic Materials');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('64', 'Ceramic Materials');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('64', 'Coatings and Films');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('64', 'Composites');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('64', 'Corrosion');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('64', 'Crystals/Crystallography');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('64', 'Inorganic Materials');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('64', 'Materials Science - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('64', 'Mechanics of Materials');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('64', 'Metals');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('64', 'Nanomaterials');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('64', 'Polymer and Organic Materials');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('64', 'Powder and Particulate Materials');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('64', 'Semiconductor and Optical Materials');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('64', 'Solid State');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('64', 'Structural Materials');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('64', 'Testing of Materials');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('64', 'Textiles');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('65', 'Acoustics, Dynamics, and Controls');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('65', 'Applied Mechanics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('65', 'Automotive Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('65', 'Electro-Mechanical Systems');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('65', 'Energy Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('65', 'Engineering Mechanics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('65', 'Heat Transfer, Combustion');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('65', 'Manufacturing');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('65', 'Mechanical Engineering - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('65', 'Mechanical Engineering - Teaching and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('65', 'Ocean Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('65', 'Pump and Fluid Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('65', 'Tribology');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('66', 'Alternative and Renewable Energy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('66', 'Mining and Metallurgy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('66', 'Mining Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('66', 'Oil, Gas, and Energy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('66', 'Petroleum Engineering');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('67', 'Nanoscience and Nanotechnology - General');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('68', 'Nuclear Engineering - General');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('68', 'Nuclear Materials and Fuels');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('68', 'Radiation Measurement and Dosimetry');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('69', 'Ergonomics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('69', 'Industrial Engineering');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('69', 'Operations Research');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('69', 'Systems Engineering');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('70', 'Ancient History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('70', 'Medieval and Renaissance History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('70', 'Modern History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('70', 'Seventeenth- and Eighteenth-Century History');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('71', 'Business and Economic History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('71', 'Cultural History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('71', 'History - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('71', 'History of Religion');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('71', 'History of Science, Technology, and Medicine');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('71', 'History - Theory and Methods');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('71', 'Intellectual History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('71', 'Political, Diplomatic, and Military History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('71', 'World History');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('72', 'African History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('72', 'Asian History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('72', 'British History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('72', 'Canadian History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('72', 'European History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('72', 'History of Geographic Regions - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('72', 'Islamic World and Near East History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('72', 'Latin American History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('72', 'Russian and Eastern European History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('72', 'United States History');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('73', 'Ethnic History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('73', 'Family History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('73', 'Labor History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('73', 'Rural History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('73', 'Social History - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('73', 'Urban History');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('73', "Women's History");

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Administrative Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'African Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Asian Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Business and Trade Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Civil Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Civil Rights and Discrimination');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Common Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Communications Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Comparative Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Constitutional Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Contracts');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Criminal Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Estate Planning and Trusts');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'European Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Human Rights Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Injury and Tort Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Intellectual Property');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'International and Transnational Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Islamic and Middle Eastern Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Juvenile and Family Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Labor and Employment Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Medical and Health Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Military, War and Peace');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Natural Resources and Environmental Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'State and Local Government Law');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('74', 'Tax Law');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('75', 'Dispute Resolution and Arbitration');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('75', 'Ethics and Professional Responsibility');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('75', 'Law and Society');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('75', 'Legal Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('75', 'Legal History, Theory, and Process');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('75', 'Legal Profession');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('75', 'Legal Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('75', 'Legal Writing and Research');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('75', 'Rule of Law');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('76', 'Courts and Legal System');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('76', 'Judges and Jurisprudence');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('76', 'Law Enforcement and Corrections');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('77', 'Applied Mathematics - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('77', 'Control Theory, Dynamical Systems, Nonlinear Dynamics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('77', 'Differential Equations - Partial and Ordinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('77', 'Mathematical Modeling & Simulation');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('77', 'Numerical Analysis and Computation');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('78', 'Algebra');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('78', 'Analysis');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('78', 'Computational Mathematics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('78', 'Discrete Mathematics, Combinatorics and Graph Theory');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('78', 'Functional Analysis and Group Theory');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('78', 'Geometry and Topology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('78', 'Logic and Foundations');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('78', 'Mathematical Physics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('78', 'Pure Mathematics - General');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('78', 'Pure Mathematics - Teaching and Professional Issues');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('79', 'Applied Statistics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('79', 'Biometrics and Biostatistics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('79', 'Probability and Stochastic Processes');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('79', 'Statistical Computation and Modelling');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('79', 'Statistical Methodology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('79', 'Statistical Theory');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('79', 'Statistics - General/Interdisciplinary');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('80', 'Analytic Philosophy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('80', 'Ancient and Medieval Philosophy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('80', 'Applied Philosophy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('80', 'Asian Philosophy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('80', 'Catholic/Christian Philosophy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('80', 'Continental Philosophy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('80', 'Epistemology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('80', 'Ethics/Bioethics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('80', 'History of Philosophy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('80', 'Logic');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('80', 'Metaphysics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('80', 'Phenomenology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('80', 'Philosophy - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('80', 'Philosophy of Science');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('80', 'Philosophy - Teaching and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('80', 'Political Philosophy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('80', 'Social Philosophy');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('81', 'Arts, Literature, and Religion');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('81', 'Biblical Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('81', 'Catholicism');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('81', 'Christianity and Christian Theology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('81', 'History of Christianity');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('81', 'Religion and Society');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('81', 'Religion - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('81', 'Religion in Asia');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('81', 'Study of Islam');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('81', 'Study of Judaism');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('81', 'Theology - General/Interdisciplinary');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('82', 'Astronomy - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('82', 'Celestial Mechanics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('82', 'Cosmology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('82', 'Planetary Astronomy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('82', 'Solar Astronomy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('82', 'Space Science');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('83', 'Analytical Chemistry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('83', 'Applied Chemistry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('83', 'Biochemistry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('83', 'Chemistry - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('83', 'Chemistry - Teaching and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('83', 'Colloid and Interface Science');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('83', 'Computational Chemistry and Molecular Modeling');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('83', 'Electrochemistry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('83', 'Environmental Chemistry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('83', 'Inorganic Chemistry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('83', 'Materials Chemistry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('83', 'Molecular Chemistry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('83', 'Nuclear Chemistry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('83', 'Organic Chemistry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('83', 'Physical Chemistry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('83', 'Pigments, Perfumes and Cosmetics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('83', 'Polymer Chemistry');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('83', 'Spectroscopy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('83', 'Surface Science ');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('84', 'Applied Physics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('84', 'Astrophysics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('84', 'Atomic, Molecular, and Optical Physics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('84', 'Biological and Chemical Physics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('84', 'Condensed Matter Physics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('84', 'Engineering Physics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('84', 'Fluid Mechanics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('84', 'Gravity and Relativity');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('84', 'Mathematical and Statistical Physics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('84', 'Nonlinear Dynamics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('84', 'Nuclear and Particle Physics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('84', 'Physics - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('84', 'Plasma and Beam Physics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('84', 'Quantum Physics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('84', 'Superconductivity');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('84', 'Thermodynamics');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('85', 'Physics, Chemistry and Astronomy - General/Interdisciplinary');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('86', 'Anthropology - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('86', 'Anthropology Theory and Methods');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('86', 'Archaeology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('86', 'Biological and Physical Anthropology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('86', 'Economic and Agricultural Anthropology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('86', 'Folklore');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('86', 'Linguistic Anthropology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('86', 'Migration and Diaspora');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('86', 'Psychological Anthropology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('86', 'Social and Cultural Anthropology');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('87', 'Communication and Journalism - Teaching and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('87', 'Communication - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('87', 'Communication Technology and Electronic Media');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('87', 'Communication Theory and Methods');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('87', 'Health Communication');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('87', 'International and Intercultural Communication');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('87', 'Interpersonal and Small Group Communication');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('87', 'Journalism and Mass Communication');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('87', 'Language and Social Interaction');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('87', 'Media Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('87', 'Mediation and Dispute Resolution');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('87', 'Organizational Communication');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('87', 'Political Communication');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('87', 'Public Relations');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('87', 'Rhetoric, Composition and Speech');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('87', 'Technical Writing and Communication');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('87', 'Visual Communication');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('88', 'Corrections and the Penal System');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('88', 'Crime and Delinquency');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('88', 'Criminal Justice - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('88', 'Criminal Justice System');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('88', 'Criminology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('88', 'Criminology and Criminal Justice - Teaching and Professional Interest');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('88', 'Forensic Science');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('88', 'Juvenile Justice');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('88', 'Law Enforcement and Crime Prevention');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('88', 'Victims and Victimology');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Adult and Continuing Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Art and Music Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Bilingual, Multilingual, and Multicultural Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Community College Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Curriculum and Instruction');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Disability and Special Needs Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Early Childhood Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Educational Administration and Supervision');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Educational Assessment, Evaluation, and Research');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Educational/School Psychology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Education - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Education Philosophy and Policy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Education Technology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Gifted Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Higher Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'International and Comparative Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'K-12 Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Physical Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Reading, Writing, and Literacy Instruction');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Religious and Moral Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Science and Mathematics Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Student Counseling');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Teacher Education and Professional Development');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Urban Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('89', 'Vocational Education');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('90', 'African-American/Black/Africana Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('90', 'American Indian/Native American Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('90', 'Asian-American Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('90', 'Ethnic, Race, and Gender Studies - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('90', 'Hispanic-American Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('90', 'Lesbian, Gay, Bisexual, and Transgender Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('90', "Women's Studies");

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('91', 'Geographic Information Sciences');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('91', 'Geography - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('91', 'Geography - Teaching and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('91', 'Human, Cultural and Economic Geography');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('91', 'Nature and Society Relations');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('91', 'Physical and Environmental Geography');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('91', 'Regional Geography');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('91', 'Urban and Regional Planning');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('92', 'African Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('92', 'American Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('92', 'Asia-Pacific Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('92', 'Canadian Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('92', 'China Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('92', 'Commonwealth Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('92', 'Development Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('92', 'English Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('92', 'European Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('92', 'French and Francophone Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('92', 'German Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('92', 'International and Area Studies - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('92', 'Islamic Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('92', 'Japanese Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('92', 'Jewish/Judaic Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('92', 'Latin American and Caribbean Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('92', 'Near and Middle Eastern Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('92', 'Russian, Eastern European, and Slavic Studies');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('93', 'Academic Libraries');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('93', 'Archives and Preservation');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('93', 'Children and Young Adult Librarianship');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('93', 'Collection Management');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('93', 'Information Science');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('93', 'Information Systems');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('93', 'Library Administration');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('93', 'Library and Information Science - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('93', 'Library and Information Science - Teaching and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('93', 'Public Libraries');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('93', 'Reference and User Services');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('93', 'Scholarly Communication');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('93', 'School Libraries');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('93', 'Special Libraries');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('93', 'Technical Services');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('94', 'Anthropological Linguistics/Sociolinguistics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('94', 'Applied Linguistics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('94', 'Comparative and Historical Linguistics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('94', 'Computational Linguistics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('94', 'Discourse and Text Linguistics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('94', 'Language Description and Linguistic Typology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('94', 'Language Learning and Acquisition');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('94', 'Language Pathology and Learning Disabilities');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('94', 'Linguistics - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('94', 'Linguistics - Teaching and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('94', 'Morphology and Syntax');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('94', 'Phonetics and Phonology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('94', 'Psycholinguistics and Neurolinguistics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('94', 'Semantics and Pragmatics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('94', 'Theory of Linguistics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('94', 'Translation Studies');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('95', 'American Politics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('95', 'Comparative Politics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('95', 'Defense and Security Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('95', 'European Politics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('95', 'Governments and Political Systems');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('95', 'International Relations');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('95', 'Peace and Conflict Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('95', 'Political Behavior');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('95', 'Political Economy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('95', 'Political Science - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('95', 'Political Science - Teaching and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('95', 'Political Theory and Philosophy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('95', 'Politics');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('95', 'Politics and Society');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Applied Psychology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Biological Psychology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Child and Adolescent Psychology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Clinical Psychology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Cognition and Perception');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Community Psychology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Counseling Psychology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Cross Cultural Psychology & Diversity');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Developmental Psychology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Educational and School Psychology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Experimental Psychology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Forensic Psychology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Health Psychology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Industrial and Organizational Psychology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Neuropsychology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Personality');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Psychological Disorders');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Psychology - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Psychology - Teaching and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Psychometrics and Methods');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Psychotherapeutic Interventions');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Social Psychology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('96', 'Sports Psychology');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('97', 'Health and Social Welfare Policy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('97', 'Policy, Planning, and Forecasting');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('97', 'Public Administration');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('97', 'Public Affairs');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('97', 'Public Finance');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('97', 'Public Policy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('97', 'Urban/Regional Studies and Planning');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('98', 'Social Science and Behavioral Science - General');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('99', 'Child and Family Welfare');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('99', 'Clinical and Medical Social Work');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('99', 'Crime and Corrections');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('99', 'Health and Mental Health');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('99', 'Poverty and Homelessness');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('99', 'Social Administration and Social Policy');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('99', 'Social Gerontology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('99', 'Social Work Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('99', 'Social Work - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('99', 'Social Work Practice');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('99', 'Social Work Theory and Research');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('99', 'Substance Abuse and Addiction Treatment');

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Collective Behavior, Social Movements, and Social Change');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Comparative and Historical Sociology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Culture and Social Structure');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Demography, Population, and Ecology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Family, Life Course, and Society');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Gender and Sexuality');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Inequality and Social Stratification');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Medicine and Health');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Organizations and Civil Society');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Political Sociology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Race and Ethnicity');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Recreation and Leisure Studies');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Rural Sociology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Social Control, Law, Crime, and Deviance');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Social Problems and Social Welfare');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Social Psychology and Social Interaction');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Sociological Research and Methods');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Sociological Theory');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Sociology - General/Interdisciplinary');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Sociology of Education');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Sociology of Language');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Sociology of Religion');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Sociology of Science and Technology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Sociology of Sports');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Sociology - Teaching and Professional Issues');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Urban Sociology');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('100', 'Work & Economy');


-- INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
-- INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
-- INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
-- INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
-- INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
-- INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
-- INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');


CREATE TABLE IF NOT EXISTS `journals`(
    `#` INT(20) PRIMARY KEY AUTO_INCREMENT,
    `journalid` VARCHAR(200) UNIQUE NOT NULL,
    `bookshelvesid` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `categoryd` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `journal_name` TEXT COLLATE utf8mb4_unicode_ci NOT NULL,
    `imagetype` varchar(255) NOT NULL,
    `imagedata` longblob NOT NULL
)ENGINE = InnoDB DEFAULT CHARSET = latin1;
-- insert
INSERT INTO `journals` (`journalid`, `bookshelvesid`, `categoryid`, `journal_name`, `imagetype`, `imagedata`) VALUES
('101', '1', '1', 'Architectural Heritage', 'image/png', 0x433a5c78616d70705c746d705c706870423243422e746d70),
('102', '1', '1', 'Architectural Histories', 'image/png', 0x433a5c78616d70705c746d705c706870313833332e746d70),
('103', '1', '1', 'Architectural History', 'image/png', 0x433a5c78616d70705c746d705c706870354133452e746d70),
('104', '1', '1', 'Arqueología de la Arquitectura', 'image/png', 0x433a5c78616d70705c746d705c706870413539302e746d70),
('105', '1', '1', 'ARQUISUR Revista', 'image/png', 0x433a5c78616d70705c746d705c706870463643452e746d70),
('106', '1', '1', 'Fabrications: The Journal of the Society of', 'image/png', 0x433a5c78616d70705c746d705c706870334543352e746d70),
('107', '1', '1', 'International Journal of Islamic', 'image/png', 0x433a5c78616d70705c746d705c706870453046322e746d70),
('108', '1', '1', 'Journal of the Society of Architectural Historians', 'image/png', 0x433a5c78616d70705c746d705c706870354437362e746d70),
('109', '1', '1', 'Studies in the History of Gardens & Designed Landscap', 'image/png', 0x433a5c78616d70705c746d705c706870414338312e746d70),
('110', '1', '1', 'Vernacular Architecture', 'image/png', 0x433a5c78616d70705c746d705c706870333641312e746d70),
('111', '2', '1', 'AIJ Journal of Technology and Design', 'image/png', 0x433a5c78616d70705c746d705c706870443444332e746d70),
('112', '2', '1', 'Anales de Investigación en', 'image/png', 0x433a5c78616d70705c746d705c706870333839462e746d70),
('113', '2', '1', 'ANIAV : Revista de Investigación', 'image/png', 0x433a5c78616d70705c746d705c706870453742432e746d70),
('114', '2', '1', 'Architectural Design', 'image/png', 0x433a5c78616d70705c746d705c706870323041462e746d70),
('115', '2', '1', 'Architectural Science Review', 'image/png', 0x433a5c78616d70705c746d705c706870373342322e746d70),
('116', '2', '1', 'Architectural Theory Review', 'image/png', 0x433a5c78616d70705c746d705c706870343335372e746d70),
('117', '2', '1', 'Architecture', 'image/png', 0x433a5c78616d70705c746d705c706870414638302e746d70),
('118', '2', '1', 'Architecture : Media Politics Society', 'image/png', 0x433a5c78616d70705c746d705c706870464432342e746d70),
('119', '2', '1', 'Architecture and Culture', 'image/png', 0x433a5c78616d70705c746d705c706870344434392e746d70),
('120', '2', '1', 'Architecture, Civil Engineering,', 'image/png', 0x433a5c78616d70705c746d705c706870413935342e746d70),
('121', '2', '1', 'Architecture, Structures and Construction', 'image/png', 0x433a5c78616d70705c746d705c706870343433422e746d70),
('122', '2', '1', 'Archnet-IJAR : International Journal of Architectural Research', 'image/png', 0x433a5c78616d70705c746d705c706870423842312e746d70),
('123', '2', '1', 'ARENA Journal of Architectural', 'image/png', 0x433a5c78616d70705c746d705c706870343043462e746d70),
('124', '2', '1', 'arq: Architectural Research', 'image/png', 0x433a5c78616d70705c746d705c706870443539452e746d70),
('125', '2', '1', 'Arquitectura+', 'image/png', 0x433a5c78616d70705c746d705c706870373345322e746d70),
('126', '2', '1', 'Arquitecturas del Sur', 'image/png', 0x433a5c78616d70705c746d705c706870383330432e746d70),
('127', '2', '1', 'Art In Translation', 'image/png', 0x433a5c78616d70705c746d705c706870463238312e746d70),
('128', '2', '1', 'Astrágalo: Cultura de la Arquitectura y la Ciudad', 'image/png', 0x433a5c78616d70705c746d705c706870314338422e746d70),
('129', '2', '1', 'Bautechnik', 'image/png', 0x433a5c78616d70705c746d705c706870463841332e746d70),
('130', '2', '1', 'Budownictwo i Architektura', 'image/png', 0x433a5c78616d70705c746d705c706870344342302e746d70),
('131', '2', '1', 'Buildings and Cities', 'image/png', 0x433a5c78616d70705c746d705c706870393842452e746d70),
('132', '2', '1', 'Buildings & Landscapes: Journal of the Vernacular Architecture Forum', 'image/png', 0x433a5c78616d70705c746d705c706870423845362e746d70),
('133', '2', '1', 'Built Environment', 'image/png', 0x433a5c78616d70705c746d705c706870343244382e746d70),
('134', '2', '1', 'Built Heritage', 'image/png', 0x433a5c78616d70705c746d705c706870393733332e746d70),
('135', '2', '1', 'Bulletin of the Polytechnic Institute of Iași. Construction. Architecture Section', 'image/png', 0x433a5c78616d70705c746d705c706870344641362e746d70),
('136', '2', '1', 'Dearquitectura', 'image/png', 0x433a5c78616d70705c746d705c706870313031392e746d70),
('137', '2', '1', 'Dimensi: Journal of Architecture and Built Environment', 'image/png', 0x433a5c78616d70705c746d705c706870373541412e746d70),
('138', '2', '1', 'EGA : Expresión Gráfica Arquitectónica', 'image/png', 0x433a5c78616d70705c746d705c706870433632432e746d70),
('139', '2', '1', 'EGE : Revista de Expresión Gráfica en la Edificación', 'image/png', 0x433a5c78616d70705c746d705c706870343337432e746d70),
('140', '2', '1', 'EMARA: Indonesian Journal of Architecture', 'image/png', 0x433a5c78616d70705c746d705c706870413039312e746d70),
('141', '2', '1', 'Enquiry: The ARCC Journal of Architectural Research', 'image/png', 0x433a5c78616d70705c746d705c706870454634452e746d70),
('142', '2', '1', 'Frontiers of Architectural Research', 'image/png', 0x433a5c78616d70705c746d705c706870373130322e746d70),
('143', '2', '1', 'Gestão & Tecnologia de Projetos / Design Management and Technology', 'image/png', 0x433a5c78616d70705c746d705c706870453438442e746d70),
('144', '2', '1', 'Home Cultures', 'image/png', 0x433a5c78616d70705c746d705c706870413439322e746d70),
('145', '2', '1', 'Igra Ustvarjalnosti / Creativity Game', 'image/png', 0x433a5c78616d70705c746d705c706870323542412e746d70),
('146', '2', '1', 'Interiors: Design, Architecture and Culture', 'image/png', 0x433a5c78616d70705c746d705c706870373046442e746d70),
('147', '2', '1', 'International Journal of Architectonic Spatial and Environmental Design', 'image/png', 0x433a5c78616d70705c746d705c706870443545322e746d70),
('148', '2', '1', 'International Journal of Architectural Computing', 'image/png', 0x433a5c78616d70705c746d705c706870364545372e746d70),
('149', '2', '1', 'International Journal of Design Education', 'image/png', 0x433a5c78616d70705c746d705c706870444236442e746d70),
('150', '2', '1', 'International Journal of Design in Society', 'image/png', 0x433a5c78616d70705c746d705c706870313235432e746d70),
('151', '2', '1', 'Japan Architectural Review', 'image/png', 0x433a5c78616d70705c746d705c706870354632362e746d70),
('152', '2', '1', 'The Journal of Architecture', 'image/png', 0x433a5c78616d70705c746d705c706870414344392e746d70),
('153', '2', '1', 'Journal of Architecture and Planning (Transactions of AIJ)', 'image/png', 0x433a5c78616d70705c746d705c706870313846322e746d70),
('154', '2', '1', 'Journal of Architecture and Urbanism', 'image/png', 0x433a5c78616d70705c746d705c706870373530442e746d70),
('155', '2', '1', 'Journal of Asian Architecture and Building Engineering', 'image/png', 0x433a5c78616d70705c746d705c706870424233462e746d70),
('156', '2', '1', 'Journal of Design and the Built Environment', 'image/png', 0x433a5c78616d70705c746d705c706870313343302e746d70),
('157', '2', '1', 'Journal of Environmental Engineering (Transactions of AIJ)', 'image/png', 0x433a5c78616d70705c746d705c706870354636312e746d70),
('158', '2', '1', 'Journal of Facade Design and Engineering', 'image/png', 0x433a5c78616d70705c746d705c706870433346382e746d70),
('159', '2', '1', 'Journal of Light & Visual Environment', 'image/png', 0x433a5c78616d70705c746d705c706870343932362e746d70),
('160', '2', '1', 'Journal of the International Association for Shell and Spatial Structures', 'image/png', 0x433a5c78616d70705c746d705c706870413042442e746d70),
('161', '2', '1', 'Jurnal Teknik Sipil dan Perencanaan', 'image/png', 0x433a5c78616d70705c746d705c706870463937442e746d70),
('162', '2', '1', 'Langkau Betang: Jurnal Arsitektur', 'image/png', 0x433a5c78616d70705c746d705c706870353443442e746d70),
('163', '2', '1', 'METU Journal of the Faculty of Architecture', 'image/png', 0x433a5c78616d70705c746d705c706870394341352e746d70),
('164', '2', '1', 'NALARs : Journal of Architecture', 'image/png', 0x433a5c78616d70705c746d705c706870453344302e746d70),
('165', '2', '1', 'Nature: National Academic Journal of Architecture', 'image/png', 0x433a5c78616d70705c746d705c706870343043362e746d70),
('166', '2', '1', 'Nordic Journal of Surveying and Real Estate Research', 'image/png', 0x433a5c78616d70705c746d705c706870414135452e746d70),
('167', '2', '1', 'Open House International', 'image/png', 0x433a5c78616d70705c746d705c706870323545382e746d70),
('168', '2', '1', 'Pós : Revista do Programa de Pós-Graduação em Arquitetura e Urbanismo da FAUUSP', 'image/png', 0x433a5c78616d70705c746d705c706870364436322e746d70),
('169', '2', '1', 'Proceedings of the International Conference on Press-in Engineering', 'image/png', 0x433a5c78616d70705c746d705c706870443439392e746d70),
('170', '2', '1', 'Proyecto, Progreso, Arquitectura / Project, Progress, Architecture', 'image/png', 0x433a5c78616d70705c746d705c706870334234332e746d70),
('171', '2', '1', 'Revista de Arquitectura', 'image/png', 0x433a5c78616d70705c746d705c7068703141332e746d70),
('172', '2', '1', 'Revista Hábitat Sustentable', 'image/png', 0x433a5c78616d70705c746d705c706870364438442e746d70),
('173', '2', '1', 'Revista INVI', 'image/png', 0x433a5c78616d70705c746d705c706870423942412e746d70),
('174', '2', '1', 'Semina : Ciências Exatas e Tecnológicas', 'image/png', 0x433a5c78616d70705c746d705c706870323332332e746d70),
('175', '2', '1', 'Technology Architecture + Design', 'image/png', 0x433a5c78616d70705c746d705c706870373034412e746d70),
('176', '2', '1', 'VLC Arquitectura', 'image/png', 0x433a5c78616d70705c746d705c706870424336382e746d70),
('177', '2', '1', '人間‐生活環境系シンポジウム報告集', 'image/png', 0x433a5c78616d70705c746d705c706870313336322e746d70),
('178', '2', '1', '未来共創', 'image/png', 0x433a5c78616d70705c746d705c706870363034422e746d70),
('179', '2', '1', '竹中大工道具館研究紀要', 'image/png', 0x433a5c78616d70705c746d705c706870434246362e746d70),
('180', '3', '1', 'Journal of Architectural Education', 'image/png', 0x433a5c78616d70705c746d705c706870323632352e746d70),
('181', '4', '1', 'AICCM Bulletin - Australian Institute for the Conservation of Cultural Material', 'image/png', 0x433a5c78616d70705c746d705c706870383737432e746d70),
('182', '4', '1', 'Architectural Heritage', 'image/png', 0x433a5c78616d70705c746d705c706870323841332e746d70),
('183', '4', '1', 'Architecture and Culture', 'image/png', 0x433a5c78616d70705c746d705c706870323944372e746d70),
('184', '4', '1', 'Archiwa - Kancelarie - Zbiory', 'image/png', 0x433a5c78616d70705c746d705c706870393141412e746d70),
('185', '4', '1', 'Built Heritage', 'image/png', 0x433a5c78616d70705c746d705c706870443442302e746d70),
('186', '4', '1', 'Conservar Patrimonio', 'image/png', 0x433a5c78616d70705c746d705c706870313542312e746d70),
('187', '4', '1', 'Conservation and Management of Archaeological Sites', 'image/png', 0x433a5c78616d70705c746d705c706870353931342e746d70),
('188', '4', '1', 'Culturas : Revista de Gestión Cultural', 'image/png', 0x433a5c78616d70705c746d705c706870423536452e746d70),
('189', '4', '1', 'Future Anterior', 'image/png', 0x433a5c78616d70705c746d705c706870383541462e746d70),
('190', '4', '1', 'Ge-conservación', 'image/png', 0x433a5c78616d70705c746d705c706870443138452e746d70),
('191', '4', '1', 'Heritage & Society', 'image/png', 0x433a5c78616d70705c746d705c706870363837302e746d70),
('192', '4', '1', 'Heritage Science', 'image/png', 0x433a5c78616d70705c746d705c706870423430312e746d70),
('193', '4', '1', 'The Historic Environment', 'image/png', 0x433a5c78616d70705c746d705c706870313438312e746d70),
('194', '4', '1', 'International Journal of Architectural Heritage', 'image/png', 0x433a5c78616d70705c746d705c706870373542442e746d70),
('195', '4', '1', 'International Journal of Building Pathology and Adaptation', 'image/png', 0x433a5c78616d70705c746d705c706870443632442e746d70),
('196', '4', '1', 'International Journal of Heritage Studies', 'image/png', 0x433a5c78616d70705c746d705c706870364641462e746d70),
('197', '4', '1', 'Journal of Architectural Conservation', 'image/png', 0x433a5c78616d70705c746d705c706870454245352e746d70),
('198', '4', '1', 'Journal of Heritage Management', 'image/png', 0x433a5c78616d70705c746d705c706870343742322e746d70),
('199', '4', '1', 'Journal of Infrastructure Preservation and Resilience', 'image/png', 0x433a5c78616d70705c746d705c706870413841462e746d70),
('200', '4', '1', 'Loggia : Arquitectura & Restauración', 'image/png', 0x433a5c78616d70705c746d705c706870383538332e746d70),
('201', '4', '1', 'Proceedings of the ICE - Engineering History and Heritage', 'image/png', 0x433a5c78616d70705c746d705c706870313232342e746d70),
('202', '4', '1', '文化資源学', 'image/png', 0x433a5c78616d70705c746d705c706870364134382e746d70),
('203', '5', '1', 'Artvin Çoruh Üniversitesi Orman Fakültesi Dergisi', 'image/png', 0x433a5c78616d70705c746d705c706870373230302e746d70),
('204', '5', '1', 'JoLA - Journal on Landscape Architecture', 'image/png', 0x433a5c78616d70705c746d705c706870423731382e746d70),
('205', '5', '1', 'Journal of European Landscapes', 'image/png', 0x433a5c78616d70705c746d705c706870323631302e746d70),
('206', '5', '1', 'Journal of the Japanese Institute of Landscape Architecture', 'image/png', 0x433a5c78616d70705c746d705c706870373133332e746d70),
('207', '5', '1', 'Landscape Journal', 'image/png', 0x433a5c78616d70705c746d705c706870444346452e746d70),
('208', '5', '1', 'Landscape Online', 'image/png', 0x433a5c78616d70705c746d705c706870414439442e746d70),
('209', '5', '1', 'Paisagem e Ambiente', 'image/png', 0x433a5c78616d70705c746d705c706870464446302e746d70),
('210', '6', '1', 'Arhitektura i Urbanizam', 'image/png', 0x433a5c78616d70705c746d705c706870342e746d70),
('211', '6', '1', 'ARQUISUR Revista', 'image/png', 0x433a5c78616d70705c746d705c706870343142322e746d70),
('212', '6', '1', 'Bitácora Urbano-Territorial', 'image/png', 0x433a5c78616d70705c746d705c706870453142422e746d70),
('213', '6', '1', 'Building Research & Information', 'image/png', 0x433a5c78616d70705c746d705c706870343237412e746d70),
('214', '6', '1', 'Cadernos Metrópole', 'image/png', 0x433a5c78616d70705c746d705c706870384135322e746d70),
('215', '6', '1', 'City, Territory and Architecture', 'image/png', 0x433a5c78616d70705c746d705c706870324536332e746d70),
('216', '6', '1', 'Ciudades', 'image/png', 0x433a5c78616d70705c746d705c706870414135412e746d70),
('217', '6', '1', 'EURE : Revista Latinoamericana de Estudios Urbano Regionales', 'image/png', 0x433a5c78616d70705c746d705c706870463941342e746d70),
('218', '6', '1', 'International Journal of E-Planning Research', 'image/png', 0x433a5c78616d70705c746d705c706870394230352e746d70),
('219', '6', '1', 'Journal of Aging and Environment', 'image/png', 0x433a5c78616d70705c746d705c706870343846412e746d70),
('220', '6', '1', 'Journal of Architecture and Planning (Transactions of AIJ)', 'image/png', 0x433a5c78616d70705c746d705c706870383931312e746d70),
('221', '6', '1', 'Journal of Race, Ethnicity and the City', 'image/png', 0x433a5c78616d70705c746d705c706870463333362e746d70),
('222', '6', '1', 'Journal of Urban Mobility', 'image/png', 0x433a5c78616d70705c746d705c706870423531302e746d70),
('223', '6', '1', 'Journal of Urban Society&#39;s Arts', 'image/png', 0x433a5c78616d70705c746d705c7068703343442e746d70),
('224', '6', '1', 'Konwersatorium Wiedzy o Mieście', 'image/png', 0x433a5c78616d70705c746d705c706870353044352e746d70),
('225', '6', '1', 'Local Development & Society', 'image/png', 0x433a5c78616d70705c746d705c706870394635332e746d70),
('226', '6', '1', 'On the W@terfront', 'image/png', 0x433a5c78616d70705c746d705c706870454239302e746d70),
('227', '6', '1', 'Paranoá', 'image/png', 0x433a5c78616d70705c746d705c706870333246412e746d70),
('228', '6', '1', 'Public Art Dialogue', 'image/png', 0x433a5c78616d70705c746d705c706870424441342e746d70),
('229', '6', '1', 'Redes', 'image/png', 0x433a5c78616d70705c746d705c706870394542452e746d70),
('230', '6', '1', 'REGION', 'image/png', 0x433a5c78616d70705c746d705c706870463638342e746d70),
('231', '6', '1', 'Revista Brasileira de Estudos Urbanos e Regionais', 'image/png', 0x433a5c78616d70705c746d705c706870373935312e746d70),
('232', '6', '1', 'Revista Brasileira de Planejamento e Desenvolvimento / Brazilian Journal of Planning and Development', 'image/png', 0x433a5c78616d70705c746d705c706870463132322e746d70),
('233', '6', '1', 'Revista de Urbanismo', 'image/png', 0x433a5c78616d70705c746d705c706870333833452e746d70),
('234', '6', '1', 'Sub\\urban : Zeitschrift für Kritische Stadtforschung', 'image/png', 0x433a5c78616d70705c746d705c706870413141382e746d70),
('235', '6', '1', 'Tataloka', 'image/png', 0x433a5c78616d70705c746d705c706870464432372e746d70),
('236', '6', '1', 'Town and Regional Planning', 'image/png', 0x433a5c78616d70705c746d705c706870354146372e746d70),
('237', '6', '1', 'Urban Housing Sciences', 'image/png', 0x433a5c78616d70705c746d705c706870423034432e746d70),
('238', '5', '1', 'Urban Planning', 'image/png', 0x433a5c78616d70705c746d705c7068703342432e746d70),
('239', '6', '1', 'Urbani Izziv', 'image/png', 0x433a5c78616d70705c746d705c706870364234312e746d70),
('240', '6', '1', 'Urbanisation', 'image/png', 0x433a5c78616d70705c746d705c706870424542322e746d70),
('241', '6', '1', 'Urbe : Revista Brasileira de Gestão Urbana / Urbe : Brazilian Journal of Urban Management', 'image/png', 0x433a5c78616d70705c746d705c706870314136462e746d70),
('242', '6', '1', '農村計画学会論文集', 'image/png', 0x433a5c78616d70705c746d705c706870374536412e746d70),
('243', '7', '1', 'Abgadiyat', 'image/png', 0x433a5c78616d70705c746d705c706870464538432e746d70),
('244', '7', '1', 'ANIAV : Revista de Investigación en Artes Visuales', 'image/png', 0x433a5c78616d70705c746d705c706870364530302e746d70),
('245', '7', '1', 'ArDIn : Arte, Diseño e Ingeniería', 'image/png', 0x433a5c78616d70705c746d705c706870463845372e746d70),
('246', '7', '1', 'Artifact', 'image/png', 0x433a5c78616d70705c746d705c706870364133302e746d70),
('247', '7', '1', 'Astrágalo: Cultura de la Arquitectura y la Ciudad', 'image/png', 0x433a5c78616d70705c746d705c706870434239412e746d70),
('248', '7', '1', 'Computer-Aided Design and Applications', 'image/png', 0x433a5c78616d70705c746d705c706870333430412e746d70),
('249', '7', '1', 'Design and Culture', 'image/png', 0x433a5c78616d70705c746d705c706870393134452e746d70),
('250', '7', '1', 'Design & Tecnologia', 'image/png', 0x433a5c78616d70705c746d705c706870373230412e746d70),
('251', '7', '1', 'Design for Health', 'image/png', 0x433a5c78616d70705c746d705c706870463536342e746d70),
('252', '7', '1', 'Design Issues', 'image/png', 0x433a5c78616d70705c746d705c7068704333342e746d70),
('253', '7', '1', 'The Design Journal', 'image/png', 0x433a5c78616d70705c746d705c706870363042452e746d70),
('254', '7', '1', 'Design Philosophy Papers', 'image/png', 0x433a5c78616d70705c746d705c706870323838332e746d70),
('255', '7', '1', 'Design Science', 'image/png', 0x433a5c78616d70705c746d705c706870393138462e746d70),
('256', '7', '1', 'Digital Creativity', 'image/png', 0x433a5c78616d70705c746d705c706870463132352e746d70),
('257', '7', '1', 'EME : Experimental Illustration, Art & Design', 'image/png', 0x433a5c78616d70705c746d705c706870344345322e746d70),
('258', '7', '1', 'Formakademisk', 'image/png', 0x433a5c78616d70705c746d705c706870443630382e746d70),
('259', '7', '1', 'I+Diseño : Revista Sientífico-Académica Internacional de Innovación Investigación y Desarrollo en Diseño', 'image/png', 0x433a5c78616d70705c746d705c706870373735412e746d70),
('260', '7', '1', 'International Journal of Design Education', 'image/png', 0x433a5c78616d70705c746d705c706870313743322e746d70),
('261', '7', '1', 'International Journal of Design in Society', 'image/png', 0x433a5c78616d70705c746d705c706870364434352e746d70),
('262', '7', '1', 'International Journal of Food Design', 'image/png', 0x433a5c78616d70705c746d705c706870434641412e746d70),
('263', '7', '1', 'International Journal of Humanities and Arts Computing', 'image/png', 0x433a5c78616d70705c746d705c706870323239442e746d70),
('264', '7', '1', 'JADECS : Journal of Art, Design, Art Education and Culture Studies', 'image/png', 0x433a5c78616d70705c746d705c706870443132452e746d70),
('265', '7', '1', 'Journal of Aging and Environment', 'image/png', 0x433a5c78616d70705c746d705c706870343237372e746d70),
('266', '7', '1', 'Journal of Design History', 'image/png', 0x433a5c78616d70705c746d705c706870433239352e746d70),
('267', '7', '1', 'Journal of Illustration', 'image/png', 0x433a5c78616d70705c746d705c706870393439422e746d70),
('268', '7', '1', 'Journal of Interior Design', 'image/png', 0x433a5c78616d70705c746d705c706870354234382e746d70),
('269', '7', '1', 'Journal of Light & Visual Environment', 'image/png', 0x433a5c78616d70705c746d705c706870414142312e746d70),
('270', '7', '1', 'The Journal of Modern Craft', 'image/png', 0x433a5c78616d70705c746d705c706870323738332e746d70),
('271', '7', '1', 'Nirmana', 'image/png', 0x433a5c78616d70705c746d705c706870314136302e746d70),
('272', '7', '1', 'Res Mobilis : International Research Journal of Furniture and Decorative Objects', 'image/png', 0x433a5c78616d70705c746d705c706870433441412e746d70),
('273', '7', '1', 'Revista Internacional de Principios y Prácticas del Diseño', 'image/png', 0x433a5c78616d70705c746d705c706870343143422e746d70),
('274', '7', '1', 'Sciences du Design', 'image/png', 0x433a5c78616d70705c746d705c706870413239392e746d70),
('275', '7', '1', 'Temes de Disseny', 'image/png', 0x433a5c78616d70705c746d705c7068703733302e746d70),
('276', '7', '1', 'West 86th', 'image/png', 0x433a5c78616d70705c746d705c706870393732432e746d70),
('277', '8', '1', 'International Journal of Art & Design Education', 'image/png', 0x433a5c78616d70705c746d705c706870353241442e746d70),
('278', '8', '1', 'International Journal of Education through Art', 'image/png', 0x433a5c78616d70705c746d705c706870394441322e746d70),
('279', '8', '1', 'International Journal of Fashion Design, Technology and Education', 'image/png', 0x433a5c78616d70705c746d705c706870463230432e746d70),
('280', '8', '1', 'Visual Inquiry', 'image/png', 0x433a5c78616d70705c746d705c706870353244412e746d70),
('281', '9', '2', 'Clothing Cultures', 'image/png', 0x433a5c78616d70705c746d705c706870453030322e746d70),
('282', '9', '2', 'Costume', 'image/png', 0x433a5c78616d70705c746d705c706870373939332e746d70),
('283', '9', '2', 'Critical Studies in Men&#39;s Fashion', 'image/png', 0x433a5c78616d70705c746d705c7068704341432e746d70),
('284', '9', '2', 'Dinamika Kerajinan dan Batik: Majalah Ilmiah', 'image/png', 0x433a5c78616d70705c746d705c706870444241362e746d70),
('285', '9', '2', 'Dress', 'image/png', 0x433a5c78616d70705c746d705c706870323333462e746d70),
('286', '9', '2', 'Fashion and Textiles', 'image/png', 0x433a5c78616d70705c746d705c706870374545442e746d70),
('287', '9', '2', 'Fashion Practice: The Journal of Design Creative Process & the Fashion Industry', 'image/png', 0x433a5c78616d70705c746d705c706870464533462e746d70),
('288', '9', '2', 'Fashion, Style & Popular Culture', 'image/png', 0x433a5c78616d70705c746d705c706870373239362e746d70),
('289', '9', '2', 'Fashion Theory: The Journal of Dress, Body & Culture', 'image/png', 0x433a5c78616d70705c746d705c706870463336462e746d70),
('290', '9', '2', 'Film, Fashion & Consumption', 'image/png', 0x433a5c78616d70705c746d705c706870353138452e746d70),
('291', '9', '2', 'International Journal of Fashion Studies', 'image/png', 0x433a5c78616d70705c746d705c706870444642352e746d70),
('292', '9', '2', 'Journal of Cotton Research', 'image/png', 0x433a5c78616d70705c746d705c706870334632432e746d70),
('293', '9', '2', 'Journal of Fashion Marketing and Management', 'image/png', 0x433a5c78616d70705c746d705c706870423035312e746d70),
('294', '9', '2', 'Journal of Textile Design, Research and Practice', 'image/png', 0x433a5c78616d70705c746d705c706870353135352e746d70),
('295', '9', '2', 'ModaPalavra E-periódico', 'image/png', 0x433a5c78616d70705c746d705c706870443730302e746d70),
('296', '9', '2', 'Research Journal of Textile and Apparel', 'image/png', 0x433a5c78616d70705c746d705c706870363241372e746d70),
('297', '9', '2', 'Senʾi Kikai Gakkaishi / Journal of the Textile Machinery Society of Japan', 'image/png', 0x433a5c78616d70705c746d705c706870343545342e746d70),
('298', '9', '2', 'Textile History', 'image/png', 0x433a5c78616d70705c746d705c706870423235422e746d70),
('299', '9', '2', 'Textile: The Journal of Cloth and Culture', 'image/png', 0x433a5c78616d70705c746d705c706870314632302e746d70),
('300', '9', '2', 'Textiles', 'image/png', 0x433a5c78616d70705c746d705c706870413242382e746d70),
('301', '9', '2', 'Textiles and Clothing Sustainability', 'image/png', 0x433a5c78616d70705c746d705c706870323939432e746d70),
('302', '9', '2', '家政学原論研究', 'image/png', 0x433a5c78616d70705c746d705c706870374342462e746d70),
('303', '9', '2', '日本家庭科教育学会誌', 'image/png', 0x433a5c78616d70705c746d705c706870464435412e746d70),
('304', '9', '2', '日本衣服学会誌', 'image/png', 0x433a5c78616d70705c746d705c706870353544422e746d70),
('305', '10', '2', 'ACM Transactions on Graphics', 'image/png', 0x433a5c78616d70705c746d705c706870454339382e746d70),
('306', '10', '2', 'Color Research & Application', 'image/png', 0x433a5c78616d70705c746d705c706870324639342e746d70),
('307', '10', '2', 'Comics Grid : Journal of Comics Scholarship', 'image/png', 0x433a5c78616d70705c746d705c706870444230442e746d70),
('308', '10', '2', 'European Comic Art', 'image/png', 0x433a5c78616d70705c746d705c706870333635442e746d70),
('309', '10', '2', 'Gráfica', 'image/png', 0x433a5c78616d70705c746d705c706870344245352e746d70),
('310', '10', '2', 'Interdisciplinary Journal of Signage and Wayfinding', 'image/png', 0x433a5c78616d70705c746d705c706870413144362e746d70),
('311', '10', '2', 'JAMS : Journal of Anime and Manga Studies', 'image/png', 0x433a5c78616d70705c746d705c706870463436432e746d70),
('312', '10', '2', 'Journal of Computational and Graphical Statistics', 'image/png', 0x433a5c78616d70705c746d705c706870353646462e746d70),
('313', '10', '2', 'Journal of Graphic Engineering and Design', 'image/png', 0x433a5c78616d70705c746d705c706870443837352e746d70),
('314', '10', '2', 'Journal of Graphic Novels & Comics', 'image/png', 0x433a5c78616d70705c746d705c706870353436372e746d70),
('315', '10', '2', 'Journal of Graphic Science of Japan', 'image/png', 0x433a5c78616d70705c746d705c706870424146322e746d70),
('316', '11', '3', 'Africa Spectrum', 'image/png', 0x433a5c78616d70705c746d705c706870453442442e746d70),
('317', '11', '3', 'African American Review', 'image/png', 0x433a5c78616d70705c746d705c706870414433302e746d70),
('318', '11', '3', 'African and Black Diaspora: An International Journal', 'image/png', 0x433a5c78616d70705c746d705c706870333342372e746d70),
('319', '11', '3', 'African and Black Diaspora: An International Journal', 'image/png', 0x433a5c78616d70705c746d705c706870433343382e746d70),
('320', '11', '3', 'African Archaeological Review', 'image/png', 0x433a5c78616d70705c746d705c706870393844432e746d70),
('321', '11', '3', 'African Arts', 'image/png', 0x433a5c78616d70705c746d705c706870464645342e746d70),
('322', '11', '3', 'African Diaspora', 'image/png', 0x433a5c78616d70705c746d705c706870363043312e746d70),
('323', '11', '3', 'African Journal of Legal Studies', 'image/png', 0x433a5c78616d70705c746d705c706870344141352e746d70),
('324', '11', '3', 'African Studies', 'image/png', 0x433a5c78616d70705c746d705c706870433135442e746d70),
('325', '11', '3', 'African Studies Review', 'image/png', 0x433a5c78616d70705c746d705c706870323231432e746d70),
('326', '11', '3', 'Black Camera', 'image/png', 0x433a5c78616d70705c746d705c706870413044322e746d70),
('327', '11', '3', 'The Black Scholar', 'image/png', 0x433a5c78616d70705c746d705c706870373235432e746d70),
('328', '11', '3', 'Black Theology', 'image/png', 0x433a5c78616d70705c746d705c706870453937312e746d70),
('329', '11', '3', 'Black Women, Gender + Families', 'image/png', 0x433a5c78616d70705c746d705c706870363845332e746d70),
('330', '11', '3', 'Brill&#39;s Annual of Afroasiatic Languages and Linguistics', 'image/png', 0x433a5c78616d70705c746d705c706870323239462e746d70),
('331', '11', '3', 'Cadernos de Estudos Africanos', 'image/png', 0x433a5c78616d70705c746d705c706870413446462e746d70),
('332', '11', '3', 'Cahiers d&#39;Études Africaines', 'image/png', 0x433a5c78616d70705c746d705c706870383134322e746d70),
('333', '11', '3', 'Callaloo', 'image/png', 0x433a5c78616d70705c746d705c7068703734422e746d70),
('334', '11', '3', 'Caribbean Studies', 'image/png', 0x433a5c78616d70705c746d705c7068703834332e746d70),
('335', '11', '3', 'Eastern African Literary and Cultural Studies', 'image/png', 0x433a5c78616d70705c746d705c706870453345452e746d70),
('336', '11', '3', 'English Studies in Africa', 'image/png', 0x433a5c78616d70705c746d705c706870353241372e746d70),
('337', '11', '3', 'Etudes et Documents Berbères', 'image/png', 0x433a5c78616d70705c746d705c706870343844462e746d70),
('338', '11', '3', 'Fire!!!', 'image/png', 0x433a5c78616d70705c746d705c7068703237432e746d70),
('339', '11', '3', 'History in Africa', 'image/png', 0x433a5c78616d70705c746d705c706870424337362e746d70),
('340', '11', '3', 'Howard Journal of Communications', 'image/png', 0x433a5c78616d70705c746d705c706870334237422e746d70),
('341', '11', '3', 'Islamic Africa', 'image/png', 0x433a5c78616d70705c746d705c706870463541342e746d70),
('342', '11', '3', 'The Journal of African American History', 'image/png', 0x433a5c78616d70705c746d705c706870434646382e746d70),
('343', '11', '3', 'Journal of African American Studies', 'image/png', 0x433a5c78616d70705c746d705c706870353138442e746d70),
('344', '11', '3', 'Journal of African Cultural Studies', 'image/png', 0x433a5c78616d70705c746d705c706870434544432e746d70),
('345', '11', '3', 'Journal of African Diaspora Archaeology and Heritage', 'image/png', 0x433a5c78616d70705c746d705c706870383943312e746d70),
('346', '11', '3', 'The Journal of African History', 'image/png', 0x433a5c78616d70705c746d705c706870373530432e746d70),
('347', '11', '3', 'Journal of African Languages and Linguistics', 'image/png', 0x433a5c78616d70705c746d705c706870453231442e746d70),
('348', '11', '3', 'Journal of African Media Studies', 'image/png', 0x433a5c78616d70705c746d705c706870433036382e746d70),
('349', '11', '3', 'Journal of African Studies', 'image/png', 0x433a5c78616d70705c746d705c706870364133312e746d70),
('350', '11', '3', 'Journal of Africana Religions', 'image/png', 0x433a5c78616d70705c746d705c706870333942372e746d70),
('351', '11', '3', 'Journal of Black Psychology', 'image/png', 0x433a5c78616d70705c746d705c706870314436312e746d70),
('352', '11', '3', 'Journal of Black Studies', 'image/png', 0x433a5c78616d70705c746d705c706870394241422e746d70),
('353', '11', '3', 'Journal of Contemporary African Studies', 'image/png', 0x433a5c78616d70705c746d705c706870334132452e746d70),
('354', '11', '3', 'Journal of Eastern African Studies', 'image/png', 0x433a5c78616d70705c746d705c706870444530302e746d70),
('355', '11', '3', 'Journal of Health Care for the Poor and Underserved', 'image/png', 0x433a5c78616d70705c746d705c706870353742352e746d70),
('356', '11', '3', 'The Journal of Latin American and Caribbean Anthropology', 'image/png', 0x433a5c78616d70705c746d705c706870383142302e746d70),
('357', '11', '3', 'The Journal of Modern African Studies', 'image/png', 0x433a5c78616d70705c746d705c706870423346372e746d70),
('358', '11', '3', 'Journal of Multicultural Counseling and Development', 'image/png', 0x433a5c78616d70705c746d705c7068703537332e746d70),
('359', '11', '3', 'The Journal of Negro Education', 'image/png', 0x433a5c78616d70705c746d705c7068704336302e746d70),
('360', '11', '3', 'Journal of Southern African Studies', 'image/png', 0x433a5c78616d70705c746d705c706870413730422e746d70),
('361', '11', '3', 'Langston Hughes Review', 'image/png', 0x433a5c78616d70705c746d705c706870313543342e746d70),
('362', '11', '3', 'Matatu : Journal of African Culture and Society', 'image/png', 0x433a5c78616d70705c746d705c706870413230372e746d70),
('363', '11', '3', 'MELUS: Multi-Ethnic Literature of the United States', 'image/png', 0x433a5c78616d70705c746d705c706870313041302e746d70),
('364', '11', '3', 'Nka Journal of Contemporary African Art', 'image/png', 0x433a5c78616d70705c746d705c706870374143352e746d70),
('365', '11', '3', 'Présence Africaine', 'image/png', 0x433a5c78616d70705c746d705c706870454232342e746d70),
('366', '11', '3', 'Research in African Literatures', 'image/png', 0x433a5c78616d70705c746d705c706870383838452e746d70),
('367', '11', '3', 'The Review of Black Political Economy', 'image/png', 0x433a5c78616d70705c746d705c706870314539352e746d70),
('368', '11', '3', 'Slavery & Abolition', 'image/png', 0x433a5c78616d70705c746d705c706870383443322e746d70),
('369', '11', '3', 'Small Axe: A Caribbean Journal of Criticism', 'image/png', 0x433a5c78616d70705c746d705c706870343236362e746d70),
('370', '11', '3', 'Souls', 'image/png', 0x433a5c78616d70705c746d705c706870444544362e746d70),
('371', '11', '3', 'Spectrum: A Journal on Black Men', 'image/png', 0x433a5c78616d70705c746d705c706870363544392e746d70),
('372', '11', '3', 'The Thinker', 'image/png', 0x433a5c78616d70705c746d705c706870443542422e746d70),
('373', '11', '3', 'Transition: An International Review', 'image/png', 0x433a5c78616d70705c746d705c706870344631332e746d70),
('374', '11', '3', 'Women, Gender, and Families of Color', 'image/png', 0x433a5c78616d70705c746d705c706870424239392e746d70),
('375', '12', '3', 'ABO : Interactive Journal for Women in the Arts 1640-1830', 'image/png', 0x433a5c78616d70705c746d705c706870323841342e746d70),
('376', '12', '3', 'Academicus : International Scientific Journal', 'image/png', 0x433a5c78616d70705c746d705c706870423046462e746d70),
('377', '12', '3', 'Academo : Revista de Investigación en Ciencias Sociales y Humanidades', 'image/png', 0x433a5c78616d70705c746d705c706870324646342e746d70),
('378', '12', '3', 'Acta Academica', 'image/png', 0x433a5c78616d70705c746d705c706870413946372e746d70),
('379', '12', '3', 'Acta Universitaria', 'image/png', 0x433a5c78616d70705c746d705c706870463645302e746d70),
('380', '12', '3', 'Acta Universitatis Carolinae: Philosophica et Historica', 'image/png', 0x433a5c78616d70705c746d705c706870443532422e746d70),
('381', '12', '3', 'Adeptus', 'image/png', 0x433a5c78616d70705c746d705c706870354539302e746d70),
('382', '12', '3', 'African Journal of Inter/Multidisciplinary Studies', 'image/png', 0x433a5c78616d70705c746d705c706870434236342e746d70),
('383', '12', '3', 'Airea, Arts and Interdisciplinary Research', 'image/png', 0x433a5c78616d70705c746d705c706870353042322e746d70),
('384', '12', '3', 'Alternative Francophone', 'image/png', 0x433a5c78616d70705c746d705c706870453334452e746d70),
('385', '12', '3', 'Anafora', 'image/png', 0x433a5c78616d70705c746d705c706870384532362e746d70),
('386', '12', '3', 'Analisis', 'image/png', 0x433a5c78616d70705c746d705c706870443643392e746d70),
('387', '12', '3', 'Angelaki', 'image/png', 0x433a5c78616d70705c746d705c706870333539452e746d70),
('388', '12', '3', 'Annales du Patrimoine', 'image/png', 0x433a5c78616d70705c746d705c706870393244322e746d70),
('389', '12', '3', 'Annales Universitatis Mariae Curie-Sklodowska : Sectio L – Artes', 'image/png', 0x433a5c78616d70705c746d705c706870324333352e746d70),
('390', '12', '3', 'Anthropocenes : Human, Inhuman, Posthuman', 'image/png', 0x433a5c78616d70705c746d705c706870443045322e746d70),
('391', '12', '3', 'Araucaria', 'image/png', 0x433a5c78616d70705c746d705c706870333831392e746d70),
('392', '12', '3', 'Arbutus Review', 'image/png', 0x433a5c78616d70705c746d705c706870413837382e746d70),
('393', '12', '3', 'ARJ Art Research Journal : Revista de Pesquisa em Artes', 'image/png', 0x433a5c78616d70705c746d705c706870323634342e746d70),
('394', '12', '3', 'Ars Adriatica', 'image/png', 0x433a5c78616d70705c746d705c706870413343322e746d70),
('395', '12', '3', 'Ars & Humanitas', 'image/png', 0x433a5c78616d70705c746d705c706870424430332e746d70),
('396', '12', '3', 'Art | Research International', 'image/png', 0x433a5c78616d70705c746d705c706870384431362e746d70),
('397', '12', '3', 'Art & Perception', 'image/png', 0x433a5c78616d70705c746d705c706870323438342e746d70),
('398', '12', '3', 'Artefact', 'image/png', 0x433a5c78616d70705c746d705c706870463944382e746d70),
('399', '12', '3', 'Arts', 'image/png', 0x433a5c78616d70705c746d705c706870364645332e746d70),
('400', '12', '3', 'Arts and the Market', 'image/png', 0x433a5c78616d70705c746d705c706870423546312e746d70),
('401', '12', '3', 'Arts Education Policy Review', 'image/png', 0x433a5c78616d70705c746d705c706870314339422e746d70),
('402', '12', '3', 'ASAP Journal', 'image/png', 0x433a5c78616d70705c746d705c706870354233372e746d70),
('403', '12', '3', 'Bhakti Persada: Jurnal Aplikasi Ipteks', 'image/png', 0x433a5c78616d70705c746d705c706870313039442e746d70),
('404', '12', '3', 'Bulletin of Aya Gakuen A : Humanities and Social Sciences', 'image/png', 0x433a5c78616d70705c746d705c706870383438362e746d70),
('405', '12', '3', 'Bulletin of Shokei College A : Humanities and Social Sciences', 'image/png', 0x433a5c78616d70705c746d705c706870323143312e746d70),
('406', '12', '3', 'Calle 14: Revista de Investigacion en el Campo del Arte', 'image/png', 0x433a5c78616d70705c746d705c706870414246312e746d70),
('407', '12', '3', 'Caucasus Survey', 'image/png', 0x433a5c78616d70705c746d705c706870343645412e746d70),
('408', '12', '3', 'Ciencia, Docencia y Tecnología', 'image/png', 0x433a5c78616d70705c746d705c706870413641462e746d70),
('409', '12', '3', 'Ciencia, Docencia y Tecnología', 'image/png', 0x433a5c78616d70705c746d705c706870313833362e746d70),
('410', '12', '3', 'CienciaUAT', 'image/png', 0x433a5c78616d70705c746d705c706870443435452e746d70),
('411', '12', '3', 'Civilizar : Ciencias Sociales y Humanas', 'image/png', 0x433a5c78616d70705c746d705c706870444545412e746d70),
('412', '12', '3', 'Cogent Arts & Humanities', 'image/png', 0x433a5c78616d70705c746d705c706870413238342e746d70),
('413', '12', '3', 'Co-herencia', 'image/png', 0x433a5c78616d70705c746d705c706870313833322e746d70),
('414', '12', '3', 'Collectivus : Revista de Ciencias Sociales', 'image/png', 0x433a5c78616d70705c746d705c706870464645342e746d70),
('415', '12', '3', 'Common Knowledge', 'image/png', 0x433a5c78616d70705c746d705c706870373831322e746d70),
('416', '12', '3', 'Communiars : Revista de Imagen, Artes y Educación Crítica y Social', 'image/png', 0x433a5c78616d70705c746d705c706870323631362e746d70),
('417', '12', '3', 'Configurations', 'image/png', 0x433a5c78616d70705c746d705c706870453245462e746d70),
('418', '12', '3', 'Contagion: Journal of Violence, Mimesis, and Culture', 'image/png', 0x433a5c78616d70705c746d705c706870343132442e746d70),
('419', '12', '3', 'Creative Arts in Education and Therapy', 'image/png', 0x433a5c78616d70705c746d705c706870443542442e746d70),
('420', '12', '3', 'Creative Industries Journal', 'image/png', 0x433a5c78616d70705c746d705c706870343532442e746d70),
('421', '12', '3', 'Cuadernos de arte de la Universidad de Granada', 'image/png', 0x433a5c78616d70705c746d705c706870394643312e746d70),
('422', '12', '3', 'Cultura-Hombre-Sociedad', 'image/png', 0x433a5c78616d70705c746d705c706870433241372e746d70),
('423', '12', '3', 'Daedalus', 'image/png', 0x433a5c78616d70705c746d705c706870364441432e746d70),
('424', '12', '3', 'Diogène', 'image/png', 0x433a5c78616d70705c746d705c706870443544442e746d70),
('425', '12', '3', 'Dubrovnik Annals', 'image/png', 0x433a5c78616d70705c746d705c706870354331362e746d70),
('426', '12', '3', 'Empirical Studies of the Arts', 'image/png', 0x433a5c78616d70705c746d705c706870423939382e746d70),
('427', '12', '3', 'Entramado', 'image/png', 0x433a5c78616d70705c746d705c706870323745332e746d70),
('428', '12', '3', 'Entreciencias: Diálogos en la Sociedad del Conocimiento', 'image/png', 0x433a5c78616d70705c746d705c706870423337422e746d70),
('429', '12', '3', 'Environmental Humanities', 'image/png', 0x433a5c78616d70705c746d705c706870343834412e746d70),
('430', '12', '3', 'Epiphany', 'image/png', 0x433a5c78616d70705c746d705c706870443439432e746d70),
('431', '12', '3', 'Escritos', 'image/png', 0x433a5c78616d70705c746d705c706870324134462e746d70),
('432', '12', '3', 'Estudios : Revista del Centro de Estudios Avanzados', 'image/png', 0x433a5c78616d70705c746d705c706870383632372e746d70),
('433', '12', '3', 'Etudes epistémè', 'image/png', 0x433a5c78616d70705c746d705c706870463843382e746d70),
('434', '12', '3', 'Etudes irlandaises (Villaneuve-d&#39;Ascq)', 'image/png', 0x433a5c78616d70705c746d705c706870373943322e746d70),
('435', '12', '14', 'Exchanges: The Interdisciplinary Research Journal', 'image/png', 0x433a5c78616d70705c746d705c706870323130462e746d70),
('436', '12', '3', 'Exchanges: The Interdisciplinary Research Journal', 'image/png', 0x433a5c78616d70705c746d705c706870343736382e746d70),
('437', '12', '3', 'Filozofija i Društvo', 'image/png', 0x433a5c78616d70705c746d705c706870373637412e746d70),
('438', '12', '3', 'Folia Histórica del Nordeste', 'image/png', 0x433a5c78616d70705c746d705c706870314343442e746d70),
('439', '12', '3', 'FORUM : University of Edinburgh Postgraduate Journal of Culture & the Arts', 'image/png', 0x433a5c78616d70705c746d705c706870424135362e746d70),
('440', '12', '3', 'Gaziantep University Journal of Social Sciences', 'image/png', 0x433a5c78616d70705c746d705c706870364132452e746d70),
('441', '12', '3', 'Grafía', 'image/png', 0x433a5c78616d70705c746d705c706870433931382e746d70),
('442', '12', '3', 'Hermēneus. Revista de traducción e interpretación', 'image/png', 0x433a5c78616d70705c746d705c706870383946382e746d70),
('443', '12', '3', 'Hipogrifo : Revista de Literatura y Cultura del Siglo de Oro', 'image/png', 0x433a5c78616d70705c746d705c706870313346392e746d70),
('444', '12', '3', 'History of Humanities', 'image/png', 0x433a5c78616d70705c746d705c706870323642332e746d70),
('445', '12', '3', 'Human Affairs', 'image/png', 0x433a5c78616d70705c746d705c706870383831442e746d70),
('446', '12', '3', 'Humaniora', 'image/png', 0x433a5c78616d70705c746d705c706870323141462e746d70),
('447', '12', '3', 'Humanities', 'image/png', 0x433a5c78616d70705c746d705c706870444244332e746d70),
('448', '12', '3', 'Humanities and Social Sciences Communications', 'image/png', 0x433a5c78616d70705c746d705c706870383146372e746d70),
('449', '12', '3', 'Indonesia Prime', 'image/png', 0x433a5c78616d70705c746d705c706870393245422e746d70),
('450', '4', '3', 'Informal Logic', 'image/png', 0x433a5c78616d70705c746d705c706870333735352e746d70),
('451', '12', '3', 'Informes Cientificos y Tecnicos (Universidad Nacional de la Patagonia Austral)', 'image/png', 0x433a5c78616d70705c746d705c706870433530302e746d70),
('452', '12', '3', 'Interdisciplinary Description of Complex Systems', 'image/png', 0x433a5c78616d70705c746d705c706870344342462e746d70),
('453', '12', '3', 'International Journal of Cultural Policy', 'image/png', 0x433a5c78616d70705c746d705c706870414630342e746d70),
('454', '12', '3', 'International Journal of Heritage Studies', 'image/png', 0x433a5c78616d70705c746d705c706870383732352e746d70),
('455', '12', '3', 'International Journal of Humanities Education', 'image/png', 0x433a5c78616d70705c746d705c706870314633302e746d70),
('456', '12', '3', 'International Journal of James Bond Studies', 'image/png', 0x433a5c78616d70705c746d705c706870334342372e746d70),
('457', '12', '3', 'International Journal of Social Political and Community Agendas in the Arts', 'image/png', 0x433a5c78616d70705c746d705c706870324144312e746d70),
('458', '12', '3', 'İstanbul Aydın Üniversitesi Dergisi', 'image/png', 0x433a5c78616d70705c746d705c706870414446372e746d70),
('459', '12', '3', 'Iztapalapa : Revista de Ciencias Sociales y Humanidades', 'image/png', 0x433a5c78616d70705c746d705c706870313531462e746d70),
('460', '12', '3', 'Jangwa Pana', 'image/png', 0x433a5c78616d70705c746d705c706870464139452e746d70),
('461', '12', '3', 'Jaunuju Mokslininku Darbai', 'image/png', 0x433a5c78616d70705c746d705c706870364131322e746d70),
('462', '12', '3', 'Journal for Artistic Research', 'image/png', 0x433a5c78616d70705c746d705c706870344442432e746d70),
('463', '12', '3', 'Journal of Aesthetics & Culture', 'image/png', 0x433a5c78616d70705c746d705c706870364338412e746d70),
('464', '12', '3', 'The Journal of Arts Management, Law, and Society', 'image/png', 0x433a5c78616d70705c746d705c706870463242332e746d70),
('465', '12', '3', 'Journal of Avant Garde Studies', 'image/png', 0x433a5c78616d70705c746d705c706870383343392e746d70),
('466', '12', '3', 'Journal of Human Environmental Studies', 'image/png', 0x433a5c78616d70705c746d705c7068703635382e746d70),
('467', '12', '3', 'Journal of Humanities and Applied Social Sciences', 'image/png', 0x433a5c78616d70705c746d705c706870443037462e746d70),
('468', '12', '3', 'Journal of the Society for Art and Science', 'image/png', 0x433a5c78616d70705c746d705c706870344543382e746d70),
('469', '12', '3', 'Journal of Open Humanities Data', 'image/png', 0x433a5c78616d70705c746d705c706870423242332e746d70),
('470', '12', '3', 'Journal of Science and Technology of the Arts', 'image/png', 0x433a5c78616d70705c746d705c706870324636362e746d70),
('471', '12', '3', 'Journal of the Society for Art and Science', 'image/png', 0x433a5c78616d70705c746d705c706870374641412e746d70),
('472', '12', '3', 'Journal of Urban Society&#39;s Arts', 'image/png', 0x433a5c78616d70705c746d705c706870454438392e746d70),
('473', '12', '3', 'Journal of Vasyl Stefanyk Precarpathian National University', 'image/png', 0x433a5c78616d70705c746d705c706870393332372e746d70),
('474', '12', '3', 'Jurnal Kawistara', 'image/png', 0x433a5c78616d70705c746d705c706870353941342e746d70),
('475', '12', '3', 'Jurnal Penelitian Humaniora', 'image/png', 0x433a5c78616d70705c746d705c706870453935332e746d70),
('476', '12', '3', 'Jurnal Sains Sosial dan Humaniora', 'image/png', 0x433a5c78616d70705c746d705c706870443238422e746d70),
('477', '12', '3', 'Jurnal Sosial Humaniora', 'image/png', 0x433a5c78616d70705c746d705c706870434544392e746d70),
('478', '12', '3', 'K&K : Kultur og Klasse', 'image/png', 0x433a5c78616d70705c746d705c706870414636432e746d70),
('479', '12', '3', 'Kasetsart Journal of Social Sciences', 'image/png', 0x433a5c78616d70705c746d705c706870333533372e746d70),
('480', '12', '3', 'Langston Hughes Review', 'image/png', 0x433a5c78616d70705c746d705c706870373843392e746d70),
('481', '12', '3', 'Law and Humanities', 'image/png', 0x433a5c78616d70705c746d705c706870323237382e746d70),
('482', '12', '3', 'Leadership and the Humanities', 'image/png', 0x433a5c78616d70705c746d705c706870434534392e746d70),
('483', '12', '3', 'Leonardo', 'image/png', 0x433a5c78616d70705c746d705c706870323033332e746d70),
('484', '12', '3', 'Liminar', 'image/png', 0x433a5c78616d70705c746d705c7068704142412e746d70),
('485', '12', '3', 'Madrygal : Revista de Estudios Gallegos', 'image/png', 0x433a5c78616d70705c746d705c706870324545382e746d70),
('486', '12', '3', 'Mediterranean Studies', 'image/png', 0x433a5c78616d70705c746d705c706870454241322e746d70),
('487', '12', '3', 'Millati: Journal of Islamic Studies and Humanities', 'image/png', 0x433a5c78616d70705c746d705c706870394443372e746d70),
('488', '12', '3', 'Mokslas : Lietuvos Ateitis / Science : Future of Lithuania', 'image/png', 0x433a5c78616d70705c746d705c706870324333442e746d70),
('489', '12', '3', 'Music & Science', 'image/png', 0x433a5c78616d70705c746d705c706870383445442e746d70),
('490', '12', '3', 'Nectart', 'image/png', 0x433a5c78616d70705c746d705c706870314437352e746d70),
('491', '12', '3', 'New Voices', 'image/png', 0x433a5c78616d70705c746d705c706870433542432e746d70),
('492', '12', '3', 'New Voices in Japanese Studies', 'image/png', 0x433a5c78616d70705c746d705c706870343435342e746d70),
('493', '12', '3', 'Noesis : Revista de Ciencias Sociales y Humanidades / Nóesis : Journal of Social Sciences and Humanities', 'image/png', 0x433a5c78616d70705c746d705c706870423744462e746d70),
('494', '12', '3', 'Nordic Journal of Art and Research', 'image/png', 0x433a5c78616d70705c746d705c706870313244312e746d70),
('495', '12', '3', 'Nordic Journal of Arts, Culture and Health', 'image/png', 0x433a5c78616d70705c746d705c706870444535462e746d70),
('496', '12', '3', 'Nordic Journal of Science and Technology Studies', 'image/png', 0x433a5c78616d70705c746d705c706870463933442e746d70),
('497', '12', '3', 'Nova Perspectiva Sistêmica', 'image/png', 0x433a5c78616d70705c746d705c706870373837302e746d70),
('498', '12', '3', 'Nova Scientia', 'image/png', 0x433a5c78616d70705c746d705c7068703344342e746d70),
('499', '12', '3', 'Novos Estudos CEBRAP', 'image/png', 0x433a5c78616d70705c746d705c706870313746462e746d70),
('500', '12', '3', 'Open Library of Humanities', 'image/png', 0x433a5c78616d70705c746d705c706870373734372e746d70),
('501', '12', '3', 'Pacific Science Review', 'image/png', 0x433a5c78616d70705c746d705c706870454333392e746d70),
('502', '12', '3', 'Palgrave Communications', 'image/png', 0x433a5c78616d70705c746d705c706870374138302e746d70),
('503', '12', '3', 'PatryTer', 'image/png', 0x433a5c78616d70705c746d705c706870323936462e746d70);

INSERT INTO `journals` (`journalid`, `bookshelvesid`, `categoryid`, `journal_name`, `imagetype`, `imagedata`) VALUES
('504', '12', '3', 'Pedagogy Critical Approaches to Teaching Literature Language Composition and Culture', 'image/png', 0x433a5c78616d70705c746d705c706870394636422e746d70),
('505', '12', '3', 'Península', 'image/png', 0x433a5c78616d70705c746d705c706870323441392e746d70),
('506', '12', '3', 'Periferia', 'image/png', 0x433a5c78616d70705c746d705c706870334232362e746d70),
('507', '12', '3', 'Perseitas', 'image/png', 0x433a5c78616d70705c746d705c706870424143372e746d70),
('508', '12', '3', 'Phronimon : Journal of the South African Society for Greek Philosophy and the Humanities', 'image/png', 0x433a5c78616d70705c746d705c706870333438432e746d70),
('509', '12', '3', 'Polish Journal of the Arts and Culture. New Series', 'image/png', 0x433a5c78616d70705c746d705c706870334641352e746d70),
('510', '12', '3', 'Qui Parle', 'image/png', 0x433a5c78616d70705c746d705c706870313436422e746d70),
('511', '12', '3', 'Raison Présente', 'image/png', 0x433a5c78616d70705c746d705c706870443138322e746d70),
('512', '12', '3', 'Realidad : Revista de Ciencias Sociales y Humanidades', 'image/png', 0x433a5c78616d70705c746d705c706870354431412e746d70),
('513', '12', '3', 'Región y Sociedad', 'image/png', 0x433a5c78616d70705c746d705c7068703839442e746d70),
('514', '12', '3', 'Representations', 'image/png', 0x433a5c78616d70705c746d705c706870354442332e746d70),
('515', '12', '3', 'Research Data Journal for the Humanities and Social Sciences', 'image/webp', 0x433a5c78616d70705c746d705c706870454245412e746d70),
('516', '12', '3', 'Research Ideas and Outcomes (RIO)', 'image/png', 0x433a5c78616d70705c746d705c706870363844432e746d70),
('517', '12', '3', 'Revista Cena', 'image/png', 0x433a5c78616d70705c746d705c706870464244362e746d70),
('518', '12', '3', 'Revista Científica Arbitrada de la Fundación MenteClara', 'image/png', 0x433a5c78616d70705c746d705c706870443932442e746d70),
('519', '12', '3', 'Revista Crítica de Ciências Sociais', 'image/png', 0x433a5c78616d70705c746d705c706870433037352e746d70),
('520', '12', '3', 'Revista de Humanidades', 'image/png', 0x433a5c78616d70705c746d705c706870333245372e746d70),
('521', '12', '3', 'Revista del Instituto Riva-Agüero', 'image/png', 0x433a5c78616d70705c746d705c706870454441442e746d70),
('522', '12', '3', 'Revista Espiga', 'image/png', 0x433a5c78616d70705c746d705c706870383137322e746d70),
('523', '12', '3', 'Revista Humanidades', 'image/png', 0x433a5c78616d70705c746d705c706870463743432e746d70),
('524', '12', '3', 'Revista Mosaico', 'image/png', 0x433a5c78616d70705c746d705c706870373442442e746d70),
('525', '12', '3', 'Revista U.D.C.A Actualidad & Divulgación Científica', 'image/png', 0x433a5c78616d70705c746d705c706870433335422e746d70),
('526', '12', '3', 'Revista UniVap', 'image/png', 0x433a5c78616d70705c746d705c706870324242422e746d70),
('527', '12', '3', 'Sasdaya : Gadjah Mada Journal of Humanities', 'image/png', 0x433a5c78616d70705c746d705c706870433537422e746d70),
('528', '12', '3', 'ScienceRise', 'image/png', 0x433a5c78616d70705c746d705c706870393630312e746d70),
('529', '12', '3', 'Semina : Ciências Sociais e Humanas', 'image/png', 0x433a5c78616d70705c746d705c706870454445362e746d70),
('530', '12', '3', 'Sens-Dessous', 'image/png', 0x433a5c78616d70705c746d705c706870354242352e746d70),
('531', '12', '3', 'Sobre : Prácticas Artísticas y Políticas de la Edición', 'image/png', 0x433a5c78616d70705c746d705c7068703336302e746d70),
('532', '12', '3', 'Social Research', 'image/png', 0x433a5c78616d70705c746d705c706870343833412e746d70),
('533', '12', '3', 'Soshum : Jurnal Sosial dan Humaniora', 'image/png', 0x433a5c78616d70705c746d705c706870423035422e746d70),
('534', '12', '3', 'Space and Culture, India', 'image/png', 0x433a5c78616d70705c746d705c706870313238312e746d70),
('535', '12', '3', 'Spectrum', 'image/png', 0x433a5c78616d70705c746d705c706870413043382e746d70),
('536', '12', '3', 'Studia Humanistyczne AGH', 'image/png', 0x433a5c78616d70705c746d705c706870324241342e746d70),
('537', '12', '3', 'Studies in Arts and Humanities', 'image/png', 0x433a5c78616d70705c746d705c706870323043332e746d70),
('538', '12', '3', 'Traektoriâ Nauki / Path of Science', 'image/png', 0x433a5c78616d70705c746d705c706870383433312e746d70),
('539', '12', '3', 'Trajecta. Religion, Culture and Society in the Low Countries', 'image/png', 0x433a5c78616d70705c746d705c706870443345382e746d70),
('540', '12', '3', 'Transposition', 'image/png', 0x433a5c78616d70705c746d705c706870383944422e746d70),
('541', '12', '3', 'Učenye Zapiski Komsomolʹskogo-na-Amure Gosudarstvennogo Tehničeskogo Universiteta / Scholarly Notes of Komsomolsk-na-Amure State Technical University', 'image/png', 0x433a5c78616d70705c746d705c706870323245302e746d70),
('542', '12', '3', 'Uchenye Zapiski Kazanskogo Universiteta. Seriya Gumanitarnye Nauki / Proceedings of Kazan University. Humanities Series', 'image/png', 0x433a5c78616d70705c746d705c706870433041382e746d70),
('543', '12', '3', 'UNED Research Journal / Cuadernos de Investigación UNED', 'image/png', 0x433a5c78616d70705c746d705c706870374346342e746d70),
('544', '12', '3', 'Universum : Revista de Humanidades y Ciencias Sociales', 'image/png', 0x433a5c78616d70705c746d705c706870334144362e746d70),
('545', '12', '3', 'Vacarme', 'image/png', 0x433a5c78616d70705c746d705c706870393941312e746d70),
('546', '12', '3', 'Wacana : Journal of the Humanities of Indonesia / Wacana : Jurnal Ilmu Pengetahuan Budaya', 'image/png', 0x433a5c78616d70705c746d705c7068703937332e746d70),
('547', '12', '3', 'Wacana : Jurnal Sosial dan Humaniora / Wacana : Journal of Social and Humanity Studies', 'image/png', 0x433a5c78616d70705c746d705c706870373935342e746d70),
('548', '12', '3', 'World Art', 'image/png', 0x433a5c78616d70705c746d705c706870454144432e746d70),
('549', '12', '3', 'Zbornik Radova Filozofskog Fakulteta u Prištini / Collection of Papers of the Faculty of Philosophy', 'image/png', 0x433a5c78616d70705c746d705c706870364444382e746d70),
('550', '12', '3', '人文×社会', 'image/png', 0x433a5c78616d70705c746d705c706870354341452e746d70),
('551', '12', '3', '人間と環境', 'image/png', 0x433a5c78616d70705c746d705c706870414139302e746d70),
('552', '12', '3', '人間と環境 電子版', 'image/png', 0x433a5c78616d70705c746d705c706870463336322e746d70),
('553', '12', '3', '仙台白百合女子大学紀要', 'image/png', 0x433a5c78616d70705c746d705c706870363338322e746d70),
('554', '12', '3', '修紅短期大学紀要', 'image/png', 0x433a5c78616d70705c746d705c706870424430442e746d70),
('555', '12', '3', '山梨英和大学紀要', 'image/png', 0x433a5c78616d70705c746d705c7068703445352e746d70),
('556', '12', '3', '山陽学園短期大学紀要', 'image/png', 0x433a5c78616d70705c746d705c706870354233332e746d70),
('557', '12', '3', '山陽論叢', 'image/png', 0x433a5c78616d70705c746d705c706870434445342e746d70),
('558', '12', '3', '敬心・研究ジャーナル', 'image/png', 0x433a5c78616d70705c746d705c706870323534432e746d70),
('559', '12', '3', '日本創造学会論文誌', 'image/png', 0x433a5c78616d70705c746d705c706870414143392e746d70),
('560', '12', '3', '日本色彩学会誌', 'image/png', 0x433a5c78616d70705c746d705c706870383638342e746d70),
('561', '12', '3', '時間学研究', 'image/png', 0x433a5c78616d70705c746d705c706870333231362e746d70),
('562', '12', '3', '東京未来大学研究紀要', 'image/png', 0x433a5c78616d70705c746d705c706870413433412e746d70),
('563', '12', '3', '横光利一研究', 'image/png', 0x433a5c78616d70705c746d705c706870313335312e746d70),
('564', '12', '3', '火内', 'image/png', 0x433a5c78616d70705c746d705c706870393534332e746d70),
('565', '12', '3', '美学', 'image/png', 0x433a5c78616d70705c746d705c706870453236412e746d70),
('566', '12', '3', '高岡法科大学紀要', 'image/png', 0x433a5c78616d70705c746d705c706870344543322e746d70),
('567', '13', '3', 'Acta Borealia', 'image/png', 0x433a5c78616d70705c746d705c706870424134382e746d70),
('568', '13', '3', 'Acta Scientiarum : Language and Culture', 'image/png', 0x433a5c78616d70705c746d705c706870374444372e746d70),
('569', '13', '3', 'Acta Universitatis Sapientiae : Social Analysis', 'image/png', 0x433a5c78616d70705c746d705c7068703734432e746d70),
('570', '13', '3', 'Afghanistan', 'image/png', 0x433a5c78616d70705c746d705c706870344344452e746d70),
('571', '13', '3', 'Africultures : La Revue des Cultures Africaines', 'image/png', 0x433a5c78616d70705c746d705c706870334530352e746d70),
('572', '13', '3', 'Agenda', 'image/png', 0x433a5c78616d70705c746d705c706870413344352e746d70),
('573', '13', '3', 'Altre Modernità', 'image/png', 0x433a5c78616d70705c746d705c706870364332372e746d70),
('574', '13', '3', 'América Latina Hoy', 'image/png', 0x433a5c78616d70705c746d705c706870444334372e746d70),
('575', '13', '3', 'Annales Universitatis Paedagogicae Cracoviensis. Studia de Cultura', 'image/png', 0x433a5c78616d70705c746d705c706870384635322e746d70),
('576', '13', '3', 'Annali Sezione Orientale', 'image/png', 0x433a5c78616d70705c746d705c7068703836422e746d70),
('577', '13', '3', 'Archiwa - Kancelarie - Zbiory', 'image/png', 0x433a5c78616d70705c746d705c706870414441352e746d70),
('578', '13', '3', 'Arizona Journal of Hispanic Cultural Studies', 'image/png', 0x433a5c78616d70705c746d705c706870313945442e746d70),
('579', '13', '3', 'ARTMargins', 'image/png', 0x433a5c78616d70705c746d705c706870444145332e746d70),
('580', '13', '3', 'Asia Pacific Translation and Intercultural Studies', 'image/png', 0x433a5c78616d70705c746d705c706870373441332e746d70),
('581', '13', '3', 'Asian Diasporic Visual Cultures and the Americas', 'image/png', 0x433a5c78616d70705c746d705c706870413746362e746d70),
('582', '13', '3', 'Atenea', 'image/png', 0x433a5c78616d70705c746d705c706870363337322e746d70),
('583', '13', '3', 'Atlantic Studies', 'image/png', 0x433a5c78616d70705c746d705c706870433838362e746d70),
('584', '13', '3', 'Beoiberística : Revista de Estudios Ibéricos Latinoamericanos y Comparativos', 'image/png', 0x433a5c78616d70705c746d705c706870374645452e746d70),
('585', '13', '3', 'boundary 2', 'image/png', 0x433a5c78616d70705c746d705c706870444535422e746d70),
('586', '13', '3', 'Bulletin of Hispanic Studies', 'image/png', 0x433a5c78616d70705c746d705c706870383836372e746d70),
('587', '13', '3', 'Camera Obscura: Feminism, Culture, and Media Studies', 'image/png', 0x433a5c78616d70705c746d705c706870443138372e746d70),
('588', '13', '3', 'Celtic : A Journal of Culture, English Language Teaching, Literature and Linguistics', 'image/png', 0x433a5c78616d70705c746d705c706870343346392e746d70),
('589', '13', '3', 'Cliodynamics', 'image/png', 0x433a5c78616d70705c746d705c706870424445442e746d70),
('590', '13', '3', 'Clothing Cultures', 'image/png', 0x433a5c78616d70705c746d705c706870334542362e746d70),
('591', '13', '3', 'Collective Intelligence', 'image/png', 0x433a5c78616d70705c746d705c706870414332372e746d70),
('592', '13', '3', 'La Colmena', 'image/png', 0x433a5c78616d70705c746d705c706870333444302e746d70),
('593', '13', '3', 'Comedy Studies', 'image/png', 0x433a5c78616d70705c746d705c706870384344352e746d70),
('594', '13', '3', 'Comics Grid : Journal of Comics Scholarship', 'image/png', 0x433a5c78616d70705c746d705c7068703837452e746d70),
('595', '13', '3', 'Communiars : Revista de Imagen, Artes y Educación Crítica y Social', 'image/png', 0x433a5c78616d70705c746d705c706870453545452e746d70),
('596', '13', '3', 'Comparative American Studies', 'image/png', 0x433a5c78616d70705c746d705c706870394231362e746d70),
('597', '13', '3', 'Comparative Cultural Studies : European and Latin American Perspectives', 'image/png', 0x433a5c78616d70705c746d705c706870313330372e746d70),
('598', '13', '3', 'CR: The New Centennial Review', 'image/png', 0x433a5c78616d70705c746d705c706870443837362e746d70),
('599', '13', '3', 'Critical Inquiry', 'image/png', 0x433a5c78616d70705c746d705c706870333035422e746d70),
('600', '13', '3', 'Critical Quarterly', 'image/png', 0x433a5c78616d70705c746d705c706870393344382e746d70),
('601', '13', '3', 'Critical Studies in Men&#39;s Fashion', 'image/png', 0x433a5c78616d70705c746d705c706870353635452e746d70),
('602', '13', '3', 'Cuadernos Inter.c.a.mbio sobre Centroamérica y el Caribe', 'image/png', 0x433a5c78616d70705c746d705c706870423833362e746d70),
('603', '13', '3', 'Cuizine: The Journal of Canadian Food Cultures', 'image/png', 0x433a5c78616d70705c746d705c706870323237412e746d70),
('604', '13', '3', 'Cultura y Educación', 'image/png', 0x433a5c78616d70705c746d705c706870373439332e746d70),
('605', '13', '3', 'Cultural Critique', 'image/png', 0x433a5c78616d70705c746d705c706870443536312e746d70),
('606', '13', '3', 'Cultural Encounters', 'image/png', 0x433a5c78616d70705c746d705c706870413336382e746d70),
('607', '13', '3', 'Cultural Science Journal', 'image/png', 0x433a5c78616d70705c746d705c706870313431352e746d70),
('608', '13', '3', 'Cultural Studies', 'image/png', 0x433a5c78616d70705c746d705c706870363437382e746d70),
('609', '13', '3', 'Cultural Studies & Critical Methodologies', 'image/png', 0x433a5c78616d70705c746d705c706870444237452e746d70),
('610', '13', '3', 'Cultural Studies Review', 'image/png', 0x433a5c78616d70705c746d705c706870354541392e746d70),
('611', '13', '3', 'Cultural Trends', 'image/png', 0x433a5c78616d70705c746d705c706870433132442e746d70),
('612', '13', '3', 'Culturas : Debates y Perspectivas de un Mundo en Cambio', 'image/png', 0x433a5c78616d70705c746d705c706870363343372e746d70),
('613', '13', '3', 'Culture and Dialogue', 'image/png', 0x433a5c78616d70705c746d705c706870353734462e746d70),
('614', '13', '3', 'Culture and Religion', 'image/png', 0x433a5c78616d70705c746d705c706870424546342e746d70),
('615', '13', '3', 'Culture, Theory and Critique', 'image/png', 0x433a5c78616d70705c746d705c706870343131352e746d70),
('616', '13', '3', 'Cultures of Science', 'image/png', 0x433a5c78616d70705c746d705c706870323830422e746d70),
('617', '13', '3', 'Diálogo', 'image/png', 0x433a5c78616d70705c746d705c706870413744362e746d70),
('618', '13', '3', 'Diálogo Andino : Revista de Historia, Geografía y Cultura Andina', 'image/png', 0x433a5c78616d70705c746d705c706870414341352e746d70),
('619', '13', '3', 'Difference', 'image/png', 0x433a5c78616d70705c746d705c7068704236302e746d70),
('620', '13', '3', 'Digital Applications in Archaeology and Cultural Heritage', 'image/png', 0x433a5c78616d70705c746d705c706870383438382e746d70),
('621', '13', '3', 'Discourse', 'image/png', 0x433a5c78616d70705c746d705c706870463430432e746d70),
('622', '13', '3', 'Early Popular Visual Culture', 'image/png', 0x433a5c78616d70705c746d705c706870383038392e746d70),
('623', '13', '3', 'East Asian Journal of Popular Culture', 'image/png', 0x433a5c78616d70705c746d705c706870333536332e746d70),
('624', '13', '3', 'Eastern African Literary and Cultural Studies', 'image/png', 0x433a5c78616d70705c746d705c706870414333412e746d70),
('625', '13', '3', 'Éire-Ireland', 'image/png', 0x433a5c78616d70705c746d705c706870464544302e746d70),
('626', '13', '3', 'Etnoantropolos̆ki Problemi / Issues in Ethnology and Anthropology', 'image/png', 0x433a5c78616d70705c746d705c706870353142332e746d70),
('627', '13', '3', 'Études', 'image/png', 0x433a5c78616d70705c746d705c706870413833322e746d70),
('628', '13', '3', 'European Journal of Cultural Studies', 'image/png', 0x433a5c78616d70705c746d705c706870313037332e746d70),
('629', '13', '3', 'Extrême-Orient Extrême-Occident', 'image/png', 0x433a5c78616d70705c746d705c706870373036362e746d70),
('630', '13', '3', 'Fashion, Style & Popular Culture', 'image/png', 0x433a5c78616d70705c746d705c706870443337372e746d70),
('631', '13', '3', 'Film, Fashion & Consumption', 'image/png', 0x433a5c78616d70705c746d705c706870443545342e746d70),
('632', '13', '3', 'Folk Life - Journal of Ethnological Studies', 'image/png', 0x433a5c78616d70705c746d705c706870344239322e746d70),
('633', '13', '3', 'French Cultural Studies', 'image/png', 0x433a5c78616d70705c746d705c706870394638462e746d70),
('634', '13', '3', 'The Germanic Review: Literature, Culture, Theory', 'image/png', 0x433a5c78616d70705c746d705c706870463939372e746d70),
('635', '13', '3', 'The Accidental Public Servant', 'image/png', 0x433a5c78616d70705c746d705c706870333035452e746d70),
('636', '13', '3', 'Gothic Studies', 'image/png', 0x433a5c78616d70705c746d705c706870353230332e746d70),
('637', '13', '3', 'Heritage', 'image/png', 0x433a5c78616d70705c746d705c706870463935302e746d70),
('638', '13', '3', 'Human Geography', 'image/png', 0x433a5c78616d70705c746d705c706870373537362e746d70),
('639', '13', '3', 'Humanus: Jurnal Ilmiah Ilmu-ilmu Humaniora', 'image/png', 0x433a5c78616d70705c746d705c706870463932452e746d70),
('640', '13', '3', 'Hungarian Cultural Studies', 'image/png', 0x433a5c78616d70705c746d705c706870363945412e746d70),
('641', '13', '3', 'Ilha do Desterro / Journal of English Language, Literatures in English and Cultural Studies', 'image/png', 0x433a5c78616d70705c746d705c706870463946362e746d70),
('642', '13', '3', 'Imaginations: Journal of Cross-Cultural Media Studies', 'image/png', 0x433a5c78616d70705c746d705c706870364536432e746d70),
('643', '13', '3', 'Infancy', 'image/png', 0x433a5c78616d70705c746d705c7068704445392e746d70),
('644', '13', '3', 'Inter-Asia Cultural Studies', 'image/png', 0x433a5c78616d70705c746d705c706870353046372e746d70),
('645', '13', '3', 'International Communication of Chinese Culture', 'image/png', 0x433a5c78616d70705c746d705c706870393232362e746d70),
('646', '13', '3', 'International Journal of Cultural Studies', 'image/png', 0x433a5c78616d70705c746d705c7068703338452e746d70),
('647', '13', '3', 'International Journal of Diverse Identities', 'image/png', 0x433a5c78616d70705c746d705c706870423934322e746d70),
('648', '13', '3', 'International Journal of Fashion Studies', 'image/png', 0x433a5c78616d70705c746d705c706870444633352e746d70),
('649', '13', '3', 'International Journal of Interdisciplinary Cultural Studies', 'image/png', 0x433a5c78616d70705c746d705c706870334639362e746d70),
('650', '13', '3', 'International Journal of Social Sustainability in Economic, Social and Cultural Context', 'image/png', 0x433a5c78616d70705c746d705c706870423536342e746d70),
('651', '13', '3', 'International Journal of Wood Culture', 'image/webp', 0x433a5c78616d70705c746d705c706870353843392e746d70),
('652', '13', '3', 'Internationale Neerlandistiek', 'image/png', 0x433a5c78616d70705c746d705c706870434432462e746d70),
('653', '13', '3', 'Iowa Journal of Cultural Studies', 'image/png', 0x433a5c78616d70705c746d705c706870414634332e746d70),
('654', '13', '3', 'Island Studies Journal', 'image/png', 0x433a5c78616d70705c746d705c706870324645442e746d70),
('655', '13', '3', 'JADECS : Journal of Art, Design, Art Education and Culture Studies', 'image/png', 0x433a5c78616d70705c746d705c706870453046452e746d70),
('656', '13', '3', 'JAMS : Journal of Anime and Manga Studies', 'image/png', 0x433a5c78616d70705c746d705c706870384137452e746d70),
('657', '13', '3', 'Javnost', 'image/png', 0x433a5c78616d70705c746d705c706870463246442e746d70),
('658', '13', '3', 'Journal for Cultural Research', 'image/png', 0x433a5c78616d70705c746d705c706870383631362e746d70),
('659', '13', '3', 'Journal of African Cultural Studies', 'image/png', 0x433a5c78616d70705c746d705c7068703730462e746d70),
('660', '13', '3', 'The Journal of American Culture', 'image/png', 0x433a5c78616d70705c746d705c706870384136392e746d70),
('661', '13', '3', 'Journal of Appalachian Studies', 'image/png', 0x433a5c78616d70705c746d705c706870424446352e746d70),
('662', '13', '3', 'Journal of Cultural Cognitive Science', 'image/png', 0x433a5c78616d70705c746d705c706870373231332e746d70),
('663', '13', '3', 'Journal of Cultural Heritage', 'image/png', 0x433a5c78616d70705c746d705c7068703336372e746d70),
('664', '13', '3', 'Journal of European Landscapes', 'image/png', 0x433a5c78616d70705c746d705c706870334342302e746d70),
('665', '13', '3', 'Journal of Festive Studies', 'image/png', 0x433a5c78616d70705c746d705c706870443936452e746d70),
('666', '13', '3', 'Journal of Graphic Novels & Comics', 'image/png', 0x433a5c78616d70705c746d705c706870354235312e746d70),
('667', '13', '3', 'Journal of Greek Media & Culture', 'image/png', 0x433a5c78616d70705c746d705c7068704546382e746d70),
('668', '13', '3', 'Journal of Heritage Management', 'image/png', 0x433a5c78616d70705c746d705c706870394643462e746d70),
('669', '13', '3', 'Journal of Iberian and Latin American Research', 'image/png', 0x433a5c78616d70705c746d705c7068703346392e746d70),
('670', '13', '3', 'Journal of Iberian and Latin American Studies', 'image/png', 0x433a5c78616d70705c746d705c706870353834342e746d70),
('671', '13', '3', 'Journal of Language and Cultural Education', 'image/png', 0x433a5c78616d70705c746d705c706870323439442e746d70),
('672', '13', '3', 'Journal of Language, Literature and Culture', 'image/png', 0x433a5c78616d70705c746d705c706870393137322e746d70),
('673', '13', '3', 'Journal of Latin American Cultural Studies', 'image/png', 0x433a5c78616d70705c746d705c706870453343392e746d70),
('674', '13', '3', 'Journal of Marine and Island Cultures', 'image/png', 0x433a5c78616d70705c746d705c706870374137432e746d70),
('675', '13', '3', 'Journal of Research Society of Buddhism and Cultural Heritage', 'image/png', 0x433a5c78616d70705c746d705c706870424430342e746d70),
('676', '13', '3', 'Journal of Sindhi Studies', 'image/png', 0x433a5c78616d70705c746d705c706870343244462e746d70),
('677', '13', '3', 'Journal of Spanish Cultural Studies', 'image/png', 0x433a5c78616d70705c746d705c706870394544422e746d70),
('678', '13', '3', 'Journal of the History of Sexuality', 'image/png', 0x433a5c78616d70705c746d705c706870363232432e746d70),
('679', '13', '3', 'Journal of Urban Cultural Studies', 'image/png', 0x433a5c78616d70705c746d705c706870454535462e746d70),
('680', '13', '3', 'Kamchatka : Revista de Análisis Cultural', 'image/png', 0x433a5c78616d70705c746d705c706870353138462e746d70),
('681', '13', '3', 'Kapata Arkeologi', 'image/png', 0x433a5c78616d70705c746d705c706870423533422e746d70),
('682', '13', '3', 'Keria Ljubljana', 'image/png', 0x433a5c78616d70705c746d705c706870314338322e746d70),
('683', '13', '3', 'Kulturní Studia', 'image/png', 0x433a5c78616d70705c746d705c706870384537372e746d70),
('684', '13', '3', 'KulturPoetik : Zeitschrift für Kulturgeschichtliche Literaturwissenschaft', 'image/png', 0x433a5c78616d70705c746d705c706870324537312e746d70),
('685', '13', '3', 'Kulturstudier', 'image/png', 0x433a5c78616d70705c746d705c706870413031382e746d70),
('686', '13', '3', 'Langston Hughes Review', 'image/png', 0x433a5c78616d70705c746d705c706870453944342e746d70),
('687', '13', '3', 'Literatūra', 'image/png', 0x433a5c78616d70705c746d705c706870334244442e746d70),
('688', '13', '3', 'Literatura Ludowa / Journal of Folklore and Popular Culture', 'image/png', 0x433a5c78616d70705c746d705c706870414642362e746d70),
('689', '13', '3', 'L&#39;Observatoire', 'image/png', 0x433a5c78616d70705c746d705c706870333634432e746d70),
('690', '13', '3', 'Luso-Brazilian Review', 'image/png', 0x433a5c78616d70705c746d705c706870454134422e746d70),
('691', '13', '3', 'Matatu : Journal of African Culture and Society', 'image/png', 0x433a5c78616d70705c746d705c706870383936422e746d70),
('692', '13', '3', 'Matraga', 'image/png', 0x433a5c78616d70705c746d705c706870464442312e746d70),
('693', '13', '3', 'Meander', 'image/png', 0x433a5c78616d70705c746d705c706870344435392e746d70),
('694', '13', '3', 'Media, Culture & Society', 'image/png', 0x433a5c78616d70705c746d705c7068704433462e746d70),
('695', '13', '3', 'Messages, Sages, and Ages : proceedings of the ... International Conference on British and American Studies', 'image/png', 0x433a5c78616d70705c746d705c706870373937372e746d70),
('696', '13', '3', 'Millennium', 'image/png', 0x433a5c78616d70705c746d705c706870443933432e746d70),
('697', '13', '3', 'Modernist Cultures', 'image/png', 0x433a5c78616d70705c746d705c706870353132432e746d70),
('698', '13', '3', 'Modulema : Revista Científica Sobre Diversidad Cultural', 'image/png', 0x433a5c78616d70705c746d705c706870413438332e746d70),
('699', '13', '3', 'Mundo Eslavo : Revista Iberoamericana de Estudios Eslavos', 'image/png', 0x433a5c78616d70705c746d705c706870343436442e746d70),
('700', '13', '3', 'Muzeológia a Kultúrne Dedičstvo / Museology and Cultural Heritage', 'image/png', 0x433a5c78616d70705c746d705c706870413735462e746d70),
('701', '13', '3', 'Narrative Culture', 'image/png', 0x433a5c78616d70705c746d705c706870323231442e746d70),
('702', '13', '3', 'New Formations', 'image/png', 0x433a5c78616d70705c746d705c706870393636342e746d70),
('703', '13', '3', 'New German Critique', 'image/png', 0x433a5c78616d70705c746d705c706870414435332e746d70),
('704', '13', '3', 'New Hibernia Review', 'image/png', 0x433a5c78616d70705c746d705c7068703237392e746d70),
('705', '13', '3', 'New Media & Society', 'image/png', 0x433a5c78616d70705c746d705c706870363133342e746d70),
('706', '13', '3', 'Nordlit : Tidsskrift i Litteratur og Kultur', 'image/png', 0x433a5c78616d70705c746d705c706870414246412e746d70),
('707', '13', '3', 'Olivar : Revista de Literatura y Cultura Espanolas', 'image/png', 0x433a5c78616d70705c746d705c7068703238372e746d70),
('708', '13', '3', 'Open Cultural Studies', 'image/png', 0x433a5c78616d70705c746d705c706870374245452e746d70),
('709', '13', '3', 'Pandaemonium Germanicum: Revista de Estudos Germanicos', 'image/png', 0x433a5c78616d70705c746d705c706870443835372e746d70),
('710', '13', '3', 'People and Culture in Oceania', 'image/png', 0x433a5c78616d70705c746d705c706870323938362e746d70),
('711', '13', '3', 'Philologia', 'image/png', 0x433a5c78616d70705c746d705c706870413636372e746d70),
('712', '13', '3', 'Photographies', 'image/png', 0x433a5c78616d70705c746d705c706870343337342e746d70),
('713', '13', '3', 'Polyglot : Jurnal Ilmiah / Polyglot : Scientific Journal', 'image/png', 0x433a5c78616d70705c746d705c706870393731452e746d70),
('714', '13', '3', 'Portuguese Studies', 'image/png', 0x433a5c78616d70705c746d705c706870373732452e746d70),
('715', '13', '3', 'positions: asia critique', 'image/png', 0x433a5c78616d70705c746d705c706870443136352e746d70),
('716', '13', '3', 'postmedieval: a journal of medieval cultural studies', 'image/png', 0x433a5c78616d70705c746d705c706870384246422e746d70),
('717', '13', '3', 'Postmodern Culture', 'image/png', 0x433a5c78616d70705c746d705c706870384442442e746d70),
('718', '13', '3', 'Prospects', 'image/png', 0x433a5c78616d70705c746d705c706870454137342e746d70),
('719', '13', '3', 'Przegląd Kulturoznawczy', 'image/png', 0x433a5c78616d70705c746d705c706870374436452e746d70),
('720', '13', '3', 'RBM: A Journal of Rare Books, Manuscripts, and Cultural Heritage', 'image/png', 0x433a5c78616d70705c746d705c706870443836302e746d70),
('721', '13', '3', 'RELACult : Revista Latino-Americana de Estudos em Cultura e Sociedade', 'image/png', 0x433a5c78616d70705c746d705c706870334644362e746d70),
('722', '13', '3', 'Sanglap : Journal of Literary and Cultural Inquiry', 'image/png', 0x433a5c78616d70705c746d705c706870423130302e746d70),
('723', '13', '3', 'Scripta : Revista Internacional de Literatura i Cultura Medieval i Moderna', 'image/png', 0x433a5c78616d70705c746d705c706870333041302e746d70),
('724', '13', '3', 'Scripta Islandica', 'image/png', 0x433a5c78616d70705c746d705c706870383341332e746d70),
('725', '13', '3', 'Sexualization, Media and Society', 'image/png', 0x433a5c78616d70705c746d705c706870453136342e746d70),
('726', '13', '3', 'Sikh Formations', 'image/png', 0x433a5c78616d70705c746d705c706870363443452e746d70),
('727', '13', '3', 'Small Axe: A Caribbean Journal of Criticism', 'image/png', 0x433a5c78616d70705c746d705c706870423433372e746d70),
('728', '13', '3', 'Social Text', 'image/png', 0x433a5c78616d70705c746d705c706870463031382e746d70),
('729', '13', '3', 'Sophia Austral', 'image/png', 0x433a5c78616d70705c746d705c706870324441462e746d70),
('730', '13', '3', 'A Journal of Politics and Culture', 'image/png', 0x433a5c78616d70705c746d705c706870423238302e746d70),
('731', '13', '3', 'South Asian Popular Culture', 'image/png', 0x433a5c78616d70705c746d705c706870313435382e746d70),
('732', '13', '3', 'South Asian Review', 'image/png', 0x433a5c78616d70705c746d705c706870383346422e746d70),
('733', '13', '3', 'Southern Cultures', 'image/png', 0x433a5c78616d70705c746d705c7068704332372e746d70),
('734', '13', '3', 'Studies in Digital Heritage', 'image/png', 0x433a5c78616d70705c746d705c706870384541372e746d70),
('735', '13', '3', 'Studies in Latin American Popular Culture', 'image/png', 0x433a5c78616d70705c746d705c706870374135462e746d70),
('736', '13', '3', 'Tarih Kültür ve Sanat Araştırmaları Dergisi / Journal of History Culture and Art Research', 'image/png', 0x433a5c78616d70705c746d705c7068704136422e746d70),
('737', '13', '3', 'Temps Modernes', 'image/png', 0x433a5c78616d70705c746d705c706870373739442e746d70),
('738', '13', '3', 'Tourism Culture & Communication', 'image/png', 0x433a5c78616d70705c746d705c706870373546342e746d70),
('739', '13', '3', 'Tranfers', 'image/png', 0x433a5c78616d70705c746d705c706870444336302e746d70),
('740', '13', '3', 'Türk Kültürü ve Hacı Bektaş Velî Araştırma Dergisi  / Turkish Culture and Hacı Bektas Veli Research Quarterly', 'image/png', 0x433a5c78616d70705c746d705c706870373243352e746d70),
('741', '13', '3', 'Visualidades', 'image/png', 0x433a5c78616d70705c746d705c706870454445312e746d70),
('742', '13', '3', 'The Year&#39;s Work in Critical and Cultural Theory', 'image/png', 0x433a5c78616d70705c746d705c706870423232372e746d70),
('743', '13', '3', 'Zeitschrift für Kulturphilosophie', 'image/png', 0x433a5c78616d70705c746d705c7068704332462e746d70),
('744', '13', '3', 'アジア・文化・歴史', 'image/png', 0x433a5c78616d70705c746d705c706870363832422e746d70),
('745', '13', '3', '会誌食文化研究', 'image/png', 0x433a5c78616d70705c746d705c706870443230322e746d70),
('746', '13', '3', '年報カルチュラル・スタディーズ', 'image/png', 0x433a5c78616d70705c746d705c706870343036442e746d70),
('747', '13', '3', '文化資源学', 'image/png', 0x433a5c78616d70705c746d705c706870394642342e746d70),
('748', '13', '3', '言語文化教育研究', 'image/png', 0x433a5c78616d70705c746d705c706870313135422e746d70),
('749', '14', '3', 'Big Data & Society', 'image/png', 0x433a5c78616d70705c746d705c706870384545342e746d70),
('750', '14', '3', 'Digital Applications in Archaeology and Cultural Heritage', 'image/png', 0x433a5c78616d70705c746d705c706870434536452e746d70),
('751', '14', '3', 'Digital Scholarship in the Humanities', 'image/png', 0x433a5c78616d70705c746d705c706870313431342e746d70),
('752', '14', '3', 'Frontiers in Digital Humanities', 'image/png', 0x433a5c78616d70705c746d705c706870354139332e746d70),
('753', '14', '3', 'International Journal of Digital Humanities', 'image/png', 0x433a5c78616d70705c746d705c706870394131452e746d70),
('754', '14', '3', 'International Journal of Humanities and Arts Computing', 'image/png', 0x433a5c78616d70705c746d705c706870443945372e746d70),
('755', '14', '3', 'Journal of the Japanese Association for Digital Humanities', 'image/png', 0x433a5c78616d70705c746d705c706870314346432e746d70),
('756', '14', '3', 'A Peer Review Journal About', 'image/png', 0x433a5c78616d70705c746d705c706870363733352e746d70),
('757', '14', '3', 'Revista de Humanidades Digitales', 'image/png', 0x433a5c78616d70705c746d705c706870414442352e746d70),
('758', '14', '3', 'Studies in Digital Heritage', 'image/png', 0x433a5c78616d70705c746d705c706870464239372e746d70),
('759', '14', '3', 'デジタル・ヒューマニティーズ', 'image/png', 0x433a5c78616d70705c746d705c706870343035322e746d70),
('760', '15', '3', 'AlterNative: An International Journal of Indigenous Peoples', 'image/png', 0x433a5c78616d70705c746d705c706870443536342e746d70),
('761', '15', '3', 'Colonial Latin American Review', 'image/png', 0x433a5c78616d70705c746d705c706870333246362e746d70),
('762', '15', '3', 'CR: The New Centennial Review', 'image/png', 0x433a5c78616d70705c746d705c706870384635462e746d70),
('763', '15', '3', 'Cultural Critique', 'image/png', 0x433a5c78616d70705c746d705c706870453443332e746d70),
('764', '15', '3', 'Ethnic and Racial Studies', 'image/png', 0x433a5c78616d70705c746d705c706870323833362e746d70),
('765', '15', '3', 'Etnoantropolos̆ki Problemi / Issues in Ethnology and Anthropology', 'image/png', 0x433a5c78616d70705c746d705c706870364237412e746d70),
('766', '15', '3', 'European Journal of Cultural Studies', 'image/png', 0x433a5c78616d70705c746d705c706870423642432e746d70),
('767', '15', '3', 'The Global South', 'image/png', 0x433a5c78616d70705c746d705c7068703332382e746d70),
('768', '15', '3', 'Interventions: International Journal of Postcolonial Studies', 'image/png', 0x433a5c78616d70705c746d705c706870353946342e746d70),
('769', '15', '3', 'Journal of Commonwealth and Postcolonial Studies', 'image/png', 0x433a5c78616d70705c746d705c706870413232392e746d70),
('770', '15', '3', 'The Journal of Commonwealth Literature', 'image/png', 0x433a5c78616d70705c746d705c706870444437442e746d70),
('771', '15', '3', 'Journal of Haitian Studies', 'image/png', 0x433a5c78616d70705c746d705c706870333039302e746d70),
('772', '15', '3', 'Journal of Postcolonial Writing', 'image/png', 0x433a5c78616d70705c746d705c706870384538302e746d70),
('773', '15', '3', 'Journal of Race, Ethnicity and the City', 'image/png', 0x433a5c78616d70705c746d705c706870443730332e746d70),
('774', '15', '3', 'Parallax', 'image/png', 0x433a5c78616d70705c746d705c706870323137422e746d70),
('775', '15', '3', 'Postcolonial Studies', 'image/png', 0x433a5c78616d70705c746d705c706870363638342e746d70),
('776', '15', '3', 'Race / Ethnicity: Multidisciplinary Global Contexts', 'image/png', 0x433a5c78616d70705c746d705c706870423731362e746d70),
('777', '15', '3', 'Settler Colonial Studies', 'image/png', 0x433a5c78616d70705c746d705c7068703334332e746d70),
('778', '15', '3', 'Spectrum: A Journal on Black Men', 'image/png', 0x433a5c78616d70705c746d705c706870343334412e746d70),
('779', '15', '3', 'Studies in American Indian Literatures', 'image/png', 0x433a5c78616d70705c746d705c706870393242342e746d70),
('780', '15', '3', 'Transition: An International Review', 'image/png', 0x433a5c78616d70705c746d705c706870443730312e746d70),
('781', '16', '4', 'Akroterion', 'image/png', 0x433a5c78616d70705c746d705c706870423636312e746d70),
('782', '16', '4', 'Antike und Abendland', 'image/png', 0x433a5c78616d70705c746d705c7068703533442e746d70),
('783', '16', '4', 'Archiv für Papyrusforschung und verwandte Gebiete', 'image/png', 0x433a5c78616d70705c746d705c706870363643372e746d70),
('784', '16', '4', 'Bulletin of the Institute of Classical Studies', 'image/png', 0x433a5c78616d70705c746d705c706870424131382e746d70),
('785', '16', '4', 'Byzantion Nea Hellás', 'image/png', 0x433a5c78616d70705c746d705c706870323034352e746d70),
('786', '16', '4', 'Circe de Clásicos y Modernos', 'image/png', 0x433a5c78616d70705c746d705c706870374335312e746d70),
('787', '16', '4', 'Classical Journal', 'image/png', 0x433a5c78616d70705c746d705c706870434236432e746d70),
('788', '16', '4', 'Classical World', 'image/png', 0x433a5c78616d70705c746d705c706870314533302e746d70),
('789', '16', '4', 'Codex : Revista Discente de Estudos Clássicos', 'image/png', 0x433a5c78616d70705c746d705c706870363437322e746d70),
('790', '16', '4', 'Gnomon', 'image/png', 0x433a5c78616d70705c746d705c706870423234352e746d70),
('791', '16', '4', 'Greek and Roman Musical Studies', 'image/png', 0x433a5c78616d70705c746d705c7068704134392e746d70),
('792', '16', '4', 'Humanitas', 'image/png', 0x433a5c78616d70705c746d705c706870353546392e746d70),
('793', '16', '4', 'Illinois Classical Studies', 'image/png', 0x433a5c78616d70705c746d705c706870413838452e746d70),
('794', '16', '4', 'International Journal of the Classical Tradition', 'image/png', 0x433a5c78616d70705c746d705c706870464230352e746d70),
('795', '16', '4', 'Journal of Classics Teaching', 'image/png', 0x433a5c78616d70705c746d705c706870343931362e746d70),
('796', '16', '4', 'Keria Ljubljana', 'image/png', 0x433a5c78616d70705c746d705c706870423445312e746d70),
('797', '16', '4', 'Literatūra', 'image/png', 0x433a5c78616d70705c746d705c7068704131362e746d70),
('798', '16', '4', 'Meander', 'image/png', 0x433a5c78616d70705c746d705c706870344139422e746d70),
('799', '16', '4', 'Mouseion', 'image/png', 0x433a5c78616d70705c746d705c706870394338352e746d70),
('800', '16', '4', 'Trends in Classics', 'image/png', 0x433a5c78616d70705c746d705c706870454337422e746d70),
('801', '16', '4', 'Yearbook of Ancient Greek Epic Online', 'image/webp', 0x433a5c78616d70705c746d705c706870344241332e746d70),
('802', '16', '4', '西洋古典学研究', 'image/png', 0x433a5c78616d70705c746d705c706870413339382e746d70),
('803', '17', '4', 'Acta Antiqua Academiae Scientiarum Hungaricae', 'image/png', 0x433a5c78616d70705c746d705c706870373830412e746d70),
('804', '17', '4', 'Acta Periodica Duellatorum', 'image/png', 0x433a5c78616d70705c746d705c706870434439452e746d70),
('805', '17', '4', 'The Annual of the British School at Athens', 'image/png', 0x433a5c78616d70705c746d705c706870314541442e746d70),
('806', '17', '4', 'Antiquité Tardive', 'image/png', 0x433a5c78616d70705c746d705c706870383339322e746d70),
('807', '17', '3', 'Antiquity', 'image/png', 0x433a5c78616d70705c746d705c706870323130422e746d70),
('808', '17', '4', 'Archaeological Journal (London)', 'image/png', 0x433a5c78616d70705c746d705c706870373939432e746d70),
('809', '17', '4', 'Archaeological Reports', 'image/png', 0x433a5c78616d70705c746d705c706870444343432e746d70),
('810', '17', '4', 'Arethusa', 'image/png', 0x433a5c78616d70705c746d705c706870333735312e746d70),
('811', '17', '3', 'Britannia', 'image/png', 0x433a5c78616d70705c746d705c706870393835442e746d70),
('812', '17', '3', 'Byzantine and Modern Greek Studies', 'image/png', 0x433a5c78616d70705c746d705c706870453635462e746d70),
('813', '17', '3', 'Byzantinische Zeitschrift', 'image/png', 0x433a5c78616d70705c746d705c706870334541322e746d70),
('814', '17', '3', 'The Cambridge Classical Journal', 'image/png', 0x433a5c78616d70705c746d705c706870394646442e746d70),
('815', '17', '3', 'Classical Antiquity', 'image/png', 0x433a5c78616d70705c746d705c706870463939372e746d70),
('816', '17', '3', 'The Classical Quarterly', 'image/png', 0x433a5c78616d70705c746d705c706870344633412e746d70),
('817', '17', '3', 'Classical Receptions Journal', 'image/png', 0x433a5c78616d70705c746d705c706870423641302e746d70),
('818', '17', '4', 'The Classical Review', 'image/png', 0x433a5c78616d70705c746d705c7068703835312e746d70),
('819', '17', '4', 'Etruscan Studies', 'image/png', 0x433a5c78616d70705c746d705c706870364538452e746d70),
('820', '17', '4', 'Greece and Rome', 'image/png', 0x433a5c78616d70705c746d705c706870433138322e746d70),
('821', '17', '4', 'Hermes', 'image/png', 0x433a5c78616d70705c746d705c706870314330362e746d70),
('822', '17', '4', 'Journal of Ancient History', 'image/png', 0x433a5c78616d70705c746d705c706870393643352e746d70),
('823', '17', '4', 'The Journal of Hellenic Studies', 'image/png', 0x433a5c78616d70705c746d705c706870463243312e746d70),
('824', '17', '4', 'Journal of Inner Asian Art and Archaeology', 'image/png', 0x433a5c78616d70705c746d705c706870353937422e746d70),
('825', '17', '4', 'Journal of Late Antiquity', 'image/png', 0x433a5c78616d70705c746d705c706870433941422e746d70),
('826', '17', '4', 'Journal of Roman Archaeology', 'image/png', 0x433a5c78616d70705c746d705c706870343842462e746d70),
('827', '17', '4', 'Journal of Roman Studies', 'image/png', 0x433a5c78616d70705c746d705c7068704143332e746d70),
('828', '17', '4', 'Judaïsme Ancien - Ancient Judaism', 'image/png', 0x433a5c78616d70705c746d705c706870384144312e746d70),
('829', '17', '4', 'Mnemosyne', 'image/png', 0x433a5c78616d70705c746d705c706870463646412e746d70),
('830', '17', '4', 'North American Archaeologist', 'image/png', 0x433a5c78616d70705c746d705c706870393843392e746d70),
('831', '17', '4', 'Papers of the British School at Rome', 'image/png', 0x433a5c78616d70705c746d705c706870453433412e746d70),
('832', '17', '4', 'Papers of the British School at Rome', 'image/png', 0x433a5c78616d70705c746d705c706870374339332e746d70),
('833', '17', '4', 'Semitica et Classica', 'image/png', 0x433a5c78616d70705c746d705c706870353839382e746d70),
('834', '17', '4', 'Symbolae Osloenses', 'image/png', 0x433a5c78616d70705c746d705c706870424443422e746d70),
('835', '17', '4', 'Zeitschrift für Assyriologie und Vorderasiatische Archäologie', 'image/png', 0x433a5c78616d70705c746d705c706870344535342e746d70),
('836', '17', '4', 'Acta Scientiarum : Language and Culture', 'image/png', 0x433a5c78616d70705c746d705c706870383434412e746d70),
('837', '17', '4', 'Acta Universitatis Carolinae: Philologica', 'image/png', 0x433a5c78616d70705c746d705c706870443532412e746d70),
('838', '17', '4', 'American Journal of Philology', 'image/png', 0x433a5c78616d70705c746d705c706870333537432e746d70),
('839', '17', '4', 'Antiquité Tardive', 'image/png', 0x433a5c78616d70705c746d705c706870463643392e746d70),
('840', '17', '4', 'Anuari de Filologia : Antiqua et Mediaeualia', 'image/png', 0x433a5c78616d70705c746d705c706870383835432e746d70),
('841', '17', '4', 'The Cambridge Classical Journal', 'image/png', 0x433a5c78616d70705c746d705c706870463435352e746d70),
('842', '17', '4', 'Carte Romanze : Rivista di Filologia e Linguistica Romanze dalle Origini al Rinascimento', 'image/png', 0x433a5c78616d70705c746d705c706870354136332e746d70),
('843', '17', '4', 'Classical Philology', 'image/png', 0x433a5c78616d70705c746d705c706870313435452e746d70),
('844', '17', '4', 'Cuadernos de Filología Clásica : Estudios Latinos', 'image/png', 0x433a5c78616d70705c746d705c706870433531312e746d70),
('845', '17', '4', 'Cuadernos de Filología Italiana', 'image/png', 0x433a5c78616d70705c746d705c706870314138352e746d70),
('846', '17', '4', 'Emerita', 'image/png', 0x433a5c78616d70705c746d705c706870354534362e746d70),
('847', '17', '4', 'Filologia e Linguística Portuguesa', 'image/png', 0x433a5c78616d70705c746d705c706870423445332e746d70),
('848', '17', '4', 'Giornale Italiano di Filologia', 'image/png', 0x433a5c78616d70705c746d705c706870334146432e746d70),
('849', '17', '4', 'Helios', 'image/png', 0x433a5c78616d70705c746d705c706870393530452e746d70),
('850', '17', '4', 'Indo-Iranian Journal', 'image/png', 0x433a5c78616d70705c746d705c706870323437302e746d70),
('851', '17', '4', 'Izvestiâ Ûžnogo Federalʹnogo Universiteta. Filologičeskie Nauki / News of the Southern Federal University. Philological Sciences', 'image/png', 0x433a5c78616d70705c746d705c706870443734312e746d70),
('852', '17', '4', 'Journal of Greek Linguistics', 'image/png', 0x433a5c78616d70705c746d705c706870333933392e746d70),
('853', '17', '4', 'Judaïsme Ancien - Ancient Judaism', 'image/png', 0x433a5c78616d70705c746d705c706870444337452e746d70),
('854', '17', '4', 'Kadmos', 'image/png', 0x433a5c78616d70705c746d705c706870343338362e746d70),
('855', '17', '4', 'Language Typology and Universals : STUF - Sprachtypologie und Universalienforschung', 'image/png', 0x433a5c78616d70705c746d705c706870433732462e746d70),
('856', '17', '4', 'Nova Tellus', 'image/png', 0x433a5c78616d70705c746d705c706870353843312e746d70),
('857', '17', '4', 'Philologus', 'image/png', 0x433a5c78616d70705c746d705c706870424236342e746d70),
('858', '17', '4', 'Polis: The Journal for Ancient Greek Political Thought', 'image/png', 0x433a5c78616d70705c746d705c7068704439432e746d70),
('859', '17', '4', 'Ramus', 'image/png', 0x433a5c78616d70705c746d705c706870364442412e746d70),
('860', '17', '4', 'Revista de Filología Española', 'image/png', 0x433a5c78616d70705c746d705c706870424237442e746d70),
('861', '17', '4', 'Revue de Philologie, de Littérature et d&#39;Histoire Anciennes', 'image/png', 0x433a5c78616d70705c746d705c706870343142352e746d70),
('862', '17', '4', 'Revue d&#39;Histoire des Textes', 'image/png', 0x433a5c78616d70705c746d705c706870423542442e746d70),
('863', '17', '4', 'Semitica et Classica', 'image/png', 0x433a5c78616d70705c746d705c706870313743342e746d70),
('864', '17', '4', 'Synthesis', 'image/png', 0x433a5c78616d70705c746d705c706870373132302e746d70),
('865', '17', '4', 'Tapa', 'image/png', 0x433a5c78616d70705c746d705c706870443443442e746d70),
('866', '17', '4', 'Transactions of the American Philological Association', 'image/png', 0x433a5c78616d70705c746d705c706870333342372e746d70),
('867', '17', '4', 'Zeitschrift für Slawistik', 'image/png', 0x433a5c78616d70705c746d705c706870413344372e746d70),
('868', '19', '5', 'a/b: Auto/Biography Studies', 'image/png', 0x433a5c78616d70705c746d705c706870453933382e746d70),
('869', '19', '5', 'Biography', 'image/png', 0x433a5c78616d70705c746d705c706870443935392e746d70),
('870', '19', '5', 'Colorado Review', 'image/png', 0x433a5c78616d70705c746d705c706870374335312e746d70),
('871', '19', '5', 'Comedy Studies', 'image/png', 0x433a5c78616d70705c746d705c706870454342322e746d70),
('872', '19', '5', 'Escritura e Imagen', 'image/png', 0x433a5c78616d70705c746d705c706870363643312e746d70),
('873', '19', '5', 'JAMS : Journal of Anime and Manga Studies', 'image/png', 0x433a5c78616d70705c746d705c706870423544432e746d70),
('874', '19', '5', 'Journal of Writing Research', 'image/png', 0x433a5c78616d70705c746d705c7068703944392e746d70),
('875', '19', '5', 'Mechademia', 'image/png', 0x433a5c78616d70705c746d705c706870354342432e746d70),
('876', '19', '5', 'the minnesota review', 'image/png', 0x433a5c78616d70705c746d705c706870453646372e746d70),
('877', '19', '5', 'New Writing', 'image/png', 0x433a5c78616d70705c746d705c706870334639382e746d70),
('878', '19', '5', 'Nord&#39; : Revue de Critique Littéraire des Hauts-de-France', 'image/png', 0x433a5c78616d70705c746d705c706870394435392e746d70),
('879', '19', '5', 'Storyworlds: A Journal of Narrative Studies', 'image/png', 0x433a5c78616d70705c746d705c706870354231432e746d70),
('880', '19', '5', 'Studies in Travel Writing', 'image/png', 0x433a5c78616d70705c746d705c706870463535392e746d70),
('881', '19', '5', '物語研究', 'image/png', 0x433a5c78616d70705c746d705c706870334445432e746d70),
('882', '20', '5', 'Alambique ', 'image/png', 0x433a5c78616d70705c746d705c706870383242412e746d70),
('883', '20', '5', 'The Antioch Review', 'image/png', 0x433a5c78616d70705c746d705c706870313937432e746d70),
('884', '20', '5', 'Appalachian Heritage', 'image/png', 0x433a5c78616d70705c746d705c706870364639432e746d70),
('885', '20', '5', 'Brumal : Revista de Investigación sobre lo Fantástico', 'image/png', 0x433a5c78616d70705c746d705c706870443744442e746d70),
('886', '20', '5', 'Critique: Studies in Contemporary Fiction', 'image/png', 0x433a5c78616d70705c746d705c706870383741362e746d70),
('887', '20', '5', 'Literature and Medicine', 'image/png', 0x433a5c78616d70705c746d705c706870443145452e746d70),
('888', '20', '5', 'MFS : Modern Fiction Studies', 'image/png', 0x433a5c78616d70705c746d705c706870343535412e746d70),
('889', '20', '5', 'The Missouri Review', 'image/png', 0x433a5c78616d70705c746d705c706870394444422e746d70),
('890', '20', '5', 'New England Review', 'image/png', 0x433a5c78616d70705c746d705c7068703637412e746d70),
('891', '20', '5', 'NOVEL: A Forum on Fiction', 'image/png', 0x433a5c78616d70705c746d705c706870383635392e746d70),
('892', '20', '5', 'Ploughshares', 'image/png', 0x433a5c78616d70705c746d705c706870453939382e746d70),
('893', '20', '5', 'Prairie Schooner', 'image/png', 0x433a5c78616d70705c746d705c706870373831452e746d70),
('894', '20', '5', 'Red Cedar Review', 'image/png', 0x433a5c78616d70705c746d705c706870443734362e746d70),
('895', '20', '5', 'Sewanee Review', 'image/png', 0x433a5c78616d70705c746d705c706870314642412e746d70),
('896', '21', '5', 'Fourth Genre: Explorations in Nonfiction', 'image/png', 0x433a5c78616d70705c746d705c706870314531422e746d70),
('897', '21', '5', 'Life Writing', 'image/png', 0x433a5c78616d70705c746d705c706870383835302e746d70),
('898', '21', '5', 'Prose Studies', 'image/png', 0x433a5c78616d70705c746d705c706870463841452e746d70),
('899', '21', '5', 'River Teeth: A Journal of Nonfiction Narrative', 'image/png', 0x433a5c78616d70705c746d705c706870363544312e746d70),
('900', '22', '5', 'AOQU : Achilles Orlando Quixote Ulysses Rivista di Epica', 'image/png', 0x433a5c78616d70705c746d705c706870463642382e746d70),
('901', '22', '5', 'Journal of British and Irish Innovative Poetry', 'image/png', 0x433a5c78616d70705c746d705c706870354630422e746d70),
('902', '22', '5', 'Langston Hughes Review', 'image/png', 0x433a5c78616d70705c746d705c706870313434332e746d70),
('903', '22', '5', 'Mawlana Rumi Review', 'image/webp', 0x433a5c78616d70705c746d705c706870374346312e746d70),
('904', '22', '5', 'Po&sie', 'image/png', 0x433a5c78616d70705c746d705c706870424632422e746d70),
('905', '22', '5', 'Poétique', 'image/png', 0x433a5c78616d70705c746d705c7068703730322e746d70),
('906', '22', '5', 'Problemy Istoričeskoj Poètiki / Problems of Historical Poetics', 'image/png', 0x433a5c78616d70705c746d705c706870353137412e746d70),
('907', '22', '5', 'Sirena: poesia, arte y critica', 'image/png', 0x433a5c78616d70705c746d705c706870414137382e746d70);

CREATE TABLE IF NOT EXISTS `articals`(
    `articalid` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
    `journalid` VARCHAR(200) UNIQUE NOT NULL,
    `description` TEXT COLLATE utf8mb4_unicode_ci NOT NULL,
    `author` TEXT COLLATE utf8mb4_unicode_ci NOT NULL,
    `link` TEXT COLLATE utf8mb4_unicode_ci NOT NULL,
    `receivedyear` DATE COLLATE utf8mb4_unicode_ci NOT NULL,
    `acceptedyear` DATE COLLATE utf8mb4_unicode_ci NOT NULL,
    `yearofpublication` DATE COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE = InnoDB DEFAULT CHARSET = latin1;
