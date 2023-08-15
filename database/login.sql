-- phpMyAdmin SQL Dump
-- version 2.8.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 03, 2010 at 03:42 AM
-- Server version: 5.0.21
-- PHP Version: 5.1.4
-- 
-- login
-- 
-- 
-- Database: `sports`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `login`
-- 

CREATE TABLE `login` (
  `name` varchar(20) collate latin1_general_ci NOT NULL,
  `pass` varchar(50) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `login`
-- 

INSERT INTO `login` (`name`, `pass`) VALUES ('megha', 'sonam');
INSERT INTO `login` (`name`, `pass`) VALUES ('aa', 'aa');
