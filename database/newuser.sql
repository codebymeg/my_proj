-- phpMyAdmin SQL Dump
-- version 2.8.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 03, 2010 at 03:42 AM
-- Server version: 5.0.21
-- PHP Version: 5.1.4
-- 
-- newuser
-- 
-- 
-- Database: `sports`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `newuser`
-- 

CREATE TABLE `newuser` (
  `name` varchar(100) collate latin1_general_ci NOT NULL,
  `email` varchar(50) collate latin1_general_ci NOT NULL,
  `gender` varchar(50) collate latin1_general_ci NOT NULL,
  `dob` varchar(100) collate latin1_general_ci NOT NULL,
  `city` varchar(50) collate latin1_general_ci NOT NULL,
  `state` varchar(50) collate latin1_general_ci NOT NULL,
  `country` varchar(100) collate latin1_general_ci NOT NULL,
  `pass` varchar(100) collate latin1_general_ci NOT NULL,
  `cpass` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `newuser`
-- 

INSERT INTO `newuser` (`name`, `email`, `gender`, `dob`, `city`, `state`, `country`, `pass`, `cpass`) VALUES ('Megha', 'mdddave@gmail.com', 'Female', 'September - 17 - 1990', 'Rajkot', 'Gujarat', 'India', 'a', 'b');
