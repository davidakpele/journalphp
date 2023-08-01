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

CREATE DATABASE skybase;

CREATE TABLE IF NOT EXISTS `users`(
    `#` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
    `id` VARCHAR(51) UNIQUE NOT NULL,
    `institute_name` TEXT NOT NULL,
    `email` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `password` CHAR(60),
    `join` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    
)ENGINE = InnoDB DEFAULT CHARSET = latin1;


CREATE TABLE IF NOT EXISTS `user_subscription`(
    `#` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
    `id` VARCHAR(51) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
    `channel_id` TEXT NOT NULL,
    `user_id` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `subscription_date` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `expire_date` DATE,
    `user_token` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL
    
)ENGINE = InnoDB DEFAULT CHARSET = latin1;

CREATE TABLE IF NOT EXISTS `channels`(
    `#` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
    `id` VARCHAR(50) UNIQUE NOT NULL,
    `channel_id` TEXT NOT NULL,
    `user_id` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `subscription_date` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `expire_date` DATE
    
)ENGINE = InnoDB DEFAULT CHARSET = latin1;


