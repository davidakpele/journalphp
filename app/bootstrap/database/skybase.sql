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
    `#` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
    `journalid` VARCHAR(200) UNIQUE NOT NULL,
    `bookshelvesid` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `categorieid` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `journal_name` TEXT COLLATE utf8mb4_unicode_ci NOT NULL,
    `imagetype` varchar(255) NOT NULL,
    `imagedata` longblob NOT NULL
)ENGINE = InnoDB DEFAULT CHARSET = latin1;

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
