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

INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('107', 'Social History');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('107', 'History of Geographic Regions');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('107', 'History - General');
INSERT INTO `categories`(`subjectid`, `categories_name`) VALUE ('107', 'History by Time Period');

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

INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');
INSERT INTO `bookshelves`(`categoriesid`, `bookshelves_name`) VALUE ('15', '');

CREATE TABLE IF NOT EXISTS `journals`(
    `#` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
    `journalid` VARCHAR(200) UNIQUE NOT NULL,
    `categoriesid` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `journal_name` TEXT COLLATE utf8mb4_unicode_ci NOT NULL,
    `image` TEXT NOT NULL, 
    `author` TEXT COLLATE utf8mb4_unicode_ci NOT NULL,
    `yearofpublication` DATE COLLATE utf8mb4_unicode_ci NOT NULL,
    `type` TEXT COLLATE utf8mb4_unicode_ci NOT NULL,
    `link` TEXT COLLATE utf8mb4_unicode_ci NOT NULL,
    `description` TEXT COLLATE utf8mb4_unicode_ci NOT NULL,
    `status` INT(5),
    `voluetype` VARCHAR (200) COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE = InnoDB DEFAULT CHARSET = latin1;
