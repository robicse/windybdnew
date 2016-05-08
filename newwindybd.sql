-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2016 at 02:02 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newwindybd`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendancerule`
--

CREATE TABLE IF NOT EXISTS `attendancerule` (
  `id` int(11) NOT NULL,
  `attendanceRuleName` varchar(256) NOT NULL,
  `startTime` time NOT NULL,
  `lateTime` time NOT NULL,
  `endTime` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendancerule`
--

INSERT INTO `attendancerule` (`id`, `attendanceRuleName`, `startTime`, `lateTime`, `endTime`) VALUES
(2, 'test', '09:00:00', '09:15:00', '18:10:55');

-- --------------------------------------------------------

--
-- Table structure for table `bankbranch`
--

CREATE TABLE IF NOT EXISTS `bankbranch` (
  `id` int(11) NOT NULL,
  `bankId` int(1) NOT NULL,
  `branchName` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bankbranch`
--

INSERT INTO `bankbranch` (`id`, `bankId`, `branchName`) VALUES
(1, 1, 'Gulshan'),
(2, 1, 'Badda');

-- --------------------------------------------------------

--
-- Table structure for table `banklist`
--

CREATE TABLE IF NOT EXISTS `banklist` (
  `id` int(11) NOT NULL,
  `bankName` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banklist`
--

INSERT INTO `banklist` (`id`, `bankName`) VALUES
(1, 'brack bank ltd');

-- --------------------------------------------------------

--
-- Table structure for table `companylist`
--

CREATE TABLE IF NOT EXISTS `companylist` (
  `id` int(11) NOT NULL,
  `companyName` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companylist`
--

INSERT INTO `companylist` (`id`, `companyName`) VALUES
(1, 'Windmill Infotech Ltd.');

-- --------------------------------------------------------

--
-- Table structure for table `departmentlist`
--

CREATE TABLE IF NOT EXISTS `departmentlist` (
  `id` int(11) NOT NULL,
  `companyId` int(1) NOT NULL,
  `departmentName` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departmentlist`
--

INSERT INTO `departmentlist` (`id`, `companyId`, `departmentName`) VALUES
(1, 1, 'IT & Web Development'),
(2, 1, 'BPE Department');

-- --------------------------------------------------------

--
-- Table structure for table `designationlist`
--

CREATE TABLE IF NOT EXISTS `designationlist` (
  `id` int(11) NOT NULL,
  `typeId` int(1) NOT NULL,
  `designationName` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `designationlist`
--

INSERT INTO `designationlist` (`id`, `typeId`, `designationName`) VALUES
(1, 1, 'Jr. Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `employeecategory`
--

CREATE TABLE IF NOT EXISTS `employeecategory` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(256) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employeecategory`
--

INSERT INTO `employeecategory` (`id`, `categoryName`) VALUES
(1, 'Probation'),
(2, 'Permanent');

-- --------------------------------------------------------

--
-- Table structure for table `employeeinfo`
--

CREATE TABLE IF NOT EXISTS `employeeinfo` (
  `id` int(11) NOT NULL,
  `employeeId` varchar(16) NOT NULL,
  `secreateNo` varchar(16) NOT NULL,
  `name` varchar(16) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `marritalStatus` varchar(50) NOT NULL,
  `nationality` varchar(16) NOT NULL,
  `bloodGroup` varchar(50) NOT NULL,
  `telephone` varchar(16) NOT NULL,
  `nationalID` varchar(20) NOT NULL,
  `personalEmail` varchar(50) NOT NULL,
  `presentAddress` text NOT NULL,
  `permanentAddress` text NOT NULL,
  `confirmationDate` date NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `emergencyContactPerson` varchar(16) NOT NULL,
  `emergencyContactNo` varchar(16) NOT NULL,
  `relationWithEC` varchar(16) NOT NULL,
  `joinDate` date NOT NULL,
  `noticePeriod` varchar(16) NOT NULL,
  `nameOfReference` varchar(16) NOT NULL,
  `referenceContactNo` varchar(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeeinfo`
--

INSERT INTO `employeeinfo` (`id`, `employeeId`, `secreateNo`, `name`, `DOB`, `gender`, `marritalStatus`, `nationality`, `bloodGroup`, `telephone`, `nationalID`, `personalEmail`, `presentAddress`, `permanentAddress`, `confirmationDate`, `category`, `image`, `emergencyContactPerson`, `emergencyContactNo`, `relationWithEC`, `joinDate`, `noticePeriod`, `nameOfReference`, `referenceContactNo`) VALUES
(1, '222222', '', 'Robi', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `holidaylist`
--

CREATE TABLE IF NOT EXISTS `holidaylist` (
  `id` int(11) NOT NULL,
  `holidayDate` date NOT NULL,
  `description` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `holidaylist`
--

INSERT INTO `holidaylist` (`id`, `holidayDate`, `description`) VALUES
(1, '2016-03-17', 'Birthday'),
(2, '2016-03-26', 'Independence Day');

-- --------------------------------------------------------

--
-- Table structure for table `leavepackage`
--

CREATE TABLE IF NOT EXISTS `leavepackage` (
  `id` int(11) NOT NULL,
  `packageName` varchar(256) NOT NULL,
  `casual` int(11) NOT NULL,
  `earned` int(11) NOT NULL,
  `sick` int(11) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leavepackage`
--

INSERT INTO `leavepackage` (`id`, `packageName`, `casual`, `earned`, `sick`, `time`) VALUES
(1, 'Probation', 3, 2, 1, '00:00:00'),
(2, 'Permanent', 7, 7, 7, '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `leaveschedule`
--

CREATE TABLE IF NOT EXISTS `leaveschedule` (
  `id` int(11) NOT NULL,
  `startDate` varchar(50) NOT NULL,
  `endDate` varchar(50) NOT NULL,
  `casual` varchar(50) NOT NULL,
  `sick` varchar(50) NOT NULL,
  `earned` varchar(50) NOT NULL,
  `totalDays` varchar(50) NOT NULL,
  `startMonth` varchar(50) NOT NULL,
  `endMonth` varchar(50) NOT NULL,
  `qId` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaveschedule`
--

INSERT INTO `leaveschedule` (`id`, `startDate`, `endDate`, `casual`, `sick`, `earned`, `totalDays`, `startMonth`, `endMonth`, `qId`) VALUES
(1, '2016-01-01', '2016-04-30', '2', '3', '2', '7', '01', '04', 1),
(2, '2016-05-01', '2016-08-31', '2', '2', '3', '7', '05', '08', 2),
(3, '2016-09-01', '2016-12-31', '3', '2', '2', '7', '09', '12', 3);

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE IF NOT EXISTS `menu_items` (
  `id` int(10) unsigned NOT NULL,
  `parent_id` int(11) NOT NULL,
  `url` text NOT NULL,
  `title` text NOT NULL,
  `classes` varchar(128) DEFAULT 'menu'
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `parent_id`, `url`, `title`, `classes`) VALUES
(1, 0, '', 'Dashboard', 'dashboard'),
(2, 0, '', 'Settings', 'dashboard'),
(3, 0, '', 'Employee Profile', 'dashboard'),
(4, 0, '', 'Attendance', 'dashboard'),
(5, 0, '', 'Leave', 'dashboard'),
(6, 0, '', 'Report', 'dashboard'),
(7, 0, '', 'Salary', 'dashboard'),
(8, 2, 'hr_settings/addcompany', 'Add Company', ''),
(9, 2, 'hr_settings/adddepartment', 'Add Department', ''),
(10, 2, 'hr_settings/addsection', 'Add Section', ''),
(11, 2, 'hr_settings/addtype', 'Add Type', ''),
(12, 2, 'hr_settings/adddesignation', 'Add Designation', ''),
(13, 2, 'hr_settings/addcategory', 'Add Category', ''),
(14, 2, 'hr_settings/addbank', 'Add Bank', ''),
(15, 2, 'hr_settings/addbranch', 'Add Branch', ''),
(16, 2, 'hr_settings/addweekend', 'Add Weekend', ''),
(17, 2, 'hr_settings/addholiday', 'Add Holiday', ''),
(18, 4, 'hr_attendance/createattendancerule', 'Create Attendance Rule', ''),
(19, 4, 'hr_attendance/viewattendancerequest', 'View Attendance Request', ''),
(20, 4, 'hr_attendance/viewattendance', 'View Attendance', ''),
(21, 4, 'hr_attendance/attendancesummary', 'Attendance Summary', ''),
(22, 5, 'hr_leave/createleavepackage', 'Create Leave Package', ''),
(23, 5, 'hr_leave/leaveapplicationrequest', 'Leave Application Request', ''),
(24, 5, 'hr_leave/leavesummary', 'Lerave Summary', ''),
(25, 5, 'hr_leave/datewiseleave', 'Date Wise Leave', ''),
(26, 5, 'hr_leave/leavereport', 'Leave Report', ''),
(27, 5, 'hr_leave/leavereportall', 'Leave Report All', ''),
(28, 3, 'hr_employeeinfo/createemployeegeneralinfo', 'Create Employee Information', ''),
(29, 3, 'hr_employeeinfo/viewemployeelist', 'Employee List', ''),
(30, 3, 'hr_employeeinfo/createemployeedocument', 'Employee Document', ''),
(31, 6, 'hr_employeeinfo/employeereport', 'Employee Report', ''),
(32, 6, 'hr_employeeinfo/employeewisepf', 'Provident Fund Report', ''),
(33, 7, 'accounts_salary/createsalary', 'Create Salary', ''),
(34, 7, 'accounts_salary/salarysheet', 'Salary Sheet', ''),
(35, 7, 'accounts_salary/banksheet', 'Bank Sheet', ''),
(36, 7, 'accounts_salary/cashsheet', 'Cash Sheet', ''),
(37, 7, 'accounts_salary/viewpayslip', 'View Payslip', ''),
(38, 7, 'accounts_salary/arrear', 'Arrear', ''),
(39, 7, 'accounts_salary/kpi', 'KPI', ''),
(40, 7, 'accounts_salary/kpideduction', 'KPI Deduction', ''),
(41, 7, 'accounts_salary/addloan', 'Add Loan', ''),
(42, 7, 'accounts_salary/viewloanreport', 'View Loan Report', ''),
(43, 7, 'accounts_salary/advance', 'Advance', ''),
(44, 7, 'accounts_salary/otsheet', 'OT Sheet', ''),
(45, 3, 'hr_employeeinfo/createappraisal', 'Create Appraisal', ''),
(46, 3, 'hr_employeeinfo/createemployeeotherinfo', 'Create Employee Other Info', ''),
(47, 2, 'user_settings/viewholiday', 'View Holiday', ''),
(48, 2, 'user_settings/viewweekend', 'View Weekend', ''),
(49, 4, 'user_attendance/viewattendancerequest', 'View Attendance Request', ''),
(50, 4, 'user_attendance/viewownattendance', 'View Own Attendance', ''),
(51, 7, 'user_salary/viewownpayslip', 'View Own Payslip', ''),
(52, 7, 'user_salary/viewownpf', 'View Own PF', ''),
(53, 5, 'user_leave/leaveschedule', 'Leave Schedule', ''),
(54, 5, 'user_leave/ownleavesummary', 'Own Leave Summary', ''),
(55, 5, 'user_leave/leaveapplication', 'Leave Application', ''),
(56, 5, 'user_leave/leaveapplicationrequest', 'Leave Application Request', '');

-- --------------------------------------------------------

--
-- Table structure for table `professional`
--

CREATE TABLE IF NOT EXISTS `professional` (
  `id` int(11) NOT NULL,
  `empid` int(11) NOT NULL DEFAULT '0',
  `designationid` int(11) NOT NULL DEFAULT '0',
  `leavepackageid` int(11) NOT NULL DEFAULT '0',
  `leaveruleid` int(11) NOT NULL DEFAULT '0',
  `attendanceid` int(11) NOT NULL DEFAULT '0',
  `salarybandid` int(11) NOT NULL DEFAULT '0',
  `pfid` int(11) NOT NULL DEFAULT '0',
  `gf` int(11) NOT NULL DEFAULT '0',
  `insurance` int(11) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `salaryband`
--

CREATE TABLE IF NOT EXISTS `salaryband` (
  `id` int(10) NOT NULL,
  `bandname` varchar(256) NOT NULL,
  `basic` int(11) NOT NULL,
  `houserent` int(11) NOT NULL,
  `health` int(11) NOT NULL,
  `transport` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salaryband`
--

INSERT INTO `salaryband` (`id`, `bandname`, `basic`, `houserent`, `health`, `transport`) VALUES
(1, 'Band1', 100, 100, 1223, 12);

-- --------------------------------------------------------

--
-- Table structure for table `sectionlist`
--

CREATE TABLE IF NOT EXISTS `sectionlist` (
  `id` int(11) NOT NULL,
  `departmentId` int(1) NOT NULL,
  `sectionName` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sectionlist`
--

INSERT INTO `sectionlist` (`id`, `departmentId`, `sectionName`) VALUES
(1, 1, 'Web Department');

-- --------------------------------------------------------

--
-- Table structure for table `typelist`
--

CREATE TABLE IF NOT EXISTS `typelist` (
  `id` int(11) NOT NULL,
  `typeName` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `typelist`
--

INSERT INTO `typelist` (`id`, `typeName`) VALUES
(1, 'regular'),
(2, 'Annual Contractual'),
(3, 'Probation');

-- --------------------------------------------------------

--
-- Table structure for table `weekendlist`
--

CREATE TABLE IF NOT EXISTS `weekendlist` (
  `id` int(11) NOT NULL,
  `departmentId` varchar(1) NOT NULL,
  `weekendDate` date NOT NULL,
  `weekendDay` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `weekendlist`
--

INSERT INTO `weekendlist` (`id`, `departmentId`, `weekendDate`, `weekendDay`) VALUES
(1, '1', '2016-03-11', 'Friday'),
(2, '1', '2016-03-12', 'Saturday'),
(3, '2', '2016-03-11', 'Friday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendancerule`
--
ALTER TABLE `attendancerule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bankbranch`
--
ALTER TABLE `bankbranch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banklist`
--
ALTER TABLE `banklist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companylist`
--
ALTER TABLE `companylist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departmentlist`
--
ALTER TABLE `departmentlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designationlist`
--
ALTER TABLE `designationlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeecategory`
--
ALTER TABLE `employeecategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidaylist`
--
ALTER TABLE `holidaylist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leavepackage`
--
ALTER TABLE `leavepackage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaveschedule`
--
ALTER TABLE `leaveschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professional`
--
ALTER TABLE `professional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaryband`
--
ALTER TABLE `salaryband`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sectionlist`
--
ALTER TABLE `sectionlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typelist`
--
ALTER TABLE `typelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weekendlist`
--
ALTER TABLE `weekendlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendancerule`
--
ALTER TABLE `attendancerule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bankbranch`
--
ALTER TABLE `bankbranch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `banklist`
--
ALTER TABLE `banklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `companylist`
--
ALTER TABLE `companylist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `departmentlist`
--
ALTER TABLE `departmentlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `designationlist`
--
ALTER TABLE `designationlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employeecategory`
--
ALTER TABLE `employeecategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `holidaylist`
--
ALTER TABLE `holidaylist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `leavepackage`
--
ALTER TABLE `leavepackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `leaveschedule`
--
ALTER TABLE `leaveschedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `professional`
--
ALTER TABLE `professional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salaryband`
--
ALTER TABLE `salaryband`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sectionlist`
--
ALTER TABLE `sectionlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `typelist`
--
ALTER TABLE `typelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `weekendlist`
--
ALTER TABLE `weekendlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
