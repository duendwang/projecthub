-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 10:46 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projecthub`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(18) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `mission` text DEFAULT NULL,
  `creator` bigint(18) UNSIGNED DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modifier` bigint(18) UNSIGNED DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='List of companies that have work';

-- --------------------------------------------------------

--
-- Table structure for table `company_profiles`
--

CREATE TABLE `company_profiles` (
  `id` bigint(18) UNSIGNED NOT NULL,
  `company_id` bigint(18) UNSIGNED NOT NULL,
  `profile_id` bigint(18) UNSIGNED NOT NULL,
  `notes` text DEFAULT NULL,
  `creator` bigint(18) UNSIGNED DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modifier` bigint(18) UNSIGNED DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Which profiles are employees of companies';

-- --------------------------------------------------------

--
-- Table structure for table `proficiencies`
--

CREATE TABLE `proficiencies` (
  `id` int(2) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `order_num` int(2) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `creator` bigint(18) UNSIGNED DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modifier` bigint(18) UNSIGNED DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Master list of proficiencies to be attached to each skill';

-- --------------------------------------------------------

--
-- Table structure for table `proficiency_profile_skills`
--

CREATE TABLE `proficiency_profile_skills` (
  `id` bigint(18) UNSIGNED NOT NULL,
  `profile_id` bigint(18) UNSIGNED NOT NULL,
  `skill_id` bigint(18) UNSIGNED NOT NULL,
  `proficiency_id` int(2) UNSIGNED NOT NULL,
  `notes` text DEFAULT NULL,
  `creator` bigint(18) UNSIGNED DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modifier` bigint(18) UNSIGNED DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Skills and proficiencies of each profile';

-- --------------------------------------------------------

--
-- Table structure for table `proficiency_project_skills`
--

CREATE TABLE `proficiency_project_skills` (
  `id` bigint(18) UNSIGNED NOT NULL,
  `project_id` bigint(18) UNSIGNED NOT NULL,
  `skill_id` bigint(18) UNSIGNED NOT NULL,
  `proficiency_id` int(2) UNSIGNED NOT NULL,
  `notes` text DEFAULT NULL,
  `creator` bigint(18) UNSIGNED DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modifier` bigint(18) UNSIGNED DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='List of skills/proficiencies requested for projects';

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `discord_id` bigint(18) UNSIGNED NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `timezone` tinyint(2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modifier` bigint(18) UNSIGNED DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Profiles of Discord users using this system';

-- --------------------------------------------------------

--
-- Table structure for table `profile_projects`
--

CREATE TABLE `profile_projects` (
  `id` bigint(18) UNSIGNED NOT NULL,
  `profile_id` bigint(18) UNSIGNED NOT NULL,
  `project_id` bigint(18) UNSIGNED NOT NULL,
  `notes` text DEFAULT NULL,
  `creator` bigint(18) UNSIGNED DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modifier` bigint(18) UNSIGNED DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='which profiles are assigned to which project as workers';

-- --------------------------------------------------------

--
-- Table structure for table `profile_project_skills`
--

CREATE TABLE `profile_project_skills` (
  `id` bigint(18) UNSIGNED NOT NULL,
  `proficiency_profile_skill_id` bigint(18) UNSIGNED NOT NULL,
  `project_id` bigint(18) UNSIGNED NOT NULL,
  `creator` bigint(18) UNSIGNED DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modifier` bigint(18) UNSIGNED DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Which profile skills are used for which project';

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(18) UNSIGNED NOT NULL,
  `company_id` bigint(18) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `creator` bigint(18) UNSIGNED DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modifier` bigint(18) UNSIGNED DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Projects tied to company that need help';

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(18) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `creator` bigint(18) UNSIGNED DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modifier` bigint(18) UNSIGNED DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Master list of possible skills to have/request';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `company_creator_fk` (`creator`),
  ADD KEY `company_modifier_fk` (`modifier`);

--
-- Indexes for table `company_profiles`
--
ALTER TABLE `company_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companyprofile_company_fk` (`company_id`),
  ADD KEY `companyprofile_profile_fk` (`profile_id`),
  ADD KEY `companyprofile_creator_fk` (`creator`),
  ADD KEY `companyprofile_modifier_fk` (`modifier`);

--
-- Indexes for table `proficiencies`
--
ALTER TABLE `proficiencies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `order` (`order_num`),
  ADD KEY `proficiency_creator_fk` (`creator`),
  ADD KEY `proficiency_modifier_fk` (`modifier`);

--
-- Indexes for table `proficiency_profile_skills`
--
ALTER TABLE `proficiency_profile_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profileskillsproficiencies_profile_fk` (`profile_id`),
  ADD KEY `profileskillsproficiencies_skill_fk` (`skill_id`),
  ADD KEY `profileskillsproficiencies_proficiency_fk` (`proficiency_id`),
  ADD KEY `profileskillsproficiencies_creator_fk` (`creator`),
  ADD KEY `profileskillsproficiencies_modifier_fk` (`modifier`);

--
-- Indexes for table `proficiency_project_skills`
--
ALTER TABLE `proficiency_project_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projectskillproficiency_project_fk` (`project_id`),
  ADD KEY `projectskillproficiency_skill_fk` (`skill_id`),
  ADD KEY `projectskillproficiency_proficiency_fk` (`proficiency_id`),
  ADD KEY `projectskillproficiency_creator_fk` (`creator`),
  ADD KEY `projectskillproficiency_modifier_fk` (`modifier`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`discord_id`),
  ADD KEY `profile_modifier_fk` (`modifier`);

--
-- Indexes for table `profile_projects`
--
ALTER TABLE `profile_projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profileprojects_profile_fk` (`profile_id`),
  ADD KEY `profileprojects_project_fk` (`project_id`),
  ADD KEY `profileprojects_creator_fk` (`creator`),
  ADD KEY `profileprojects_modifier_fk` (`modifier`);

--
-- Indexes for table `profile_project_skills`
--
ALTER TABLE `profile_project_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profileprojectskill_proficiencyprofileskill_fk` (`proficiency_profile_skill_id`),
  ADD KEY `profileprojectskill_project_fk` (`project_id`),
  ADD KEY `profileprojectskill_creator_fk` (`creator`),
  ADD KEY `profileprojectskill_modifier_fk` (`modifier`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `project_company_fk` (`company_id`),
  ADD KEY `project_creator_fk` (`creator`),
  ADD KEY `project_modifier_fk` (`modifier`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `skills_name_unique` (`name`),
  ADD KEY `skill_creator_fk` (`creator`),
  ADD KEY `skill_modifier_fk` (`modifier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(18) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_profiles`
--
ALTER TABLE `company_profiles`
  MODIFY `id` bigint(18) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proficiencies`
--
ALTER TABLE `proficiencies`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proficiency_profile_skills`
--
ALTER TABLE `proficiency_profile_skills`
  MODIFY `id` bigint(18) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proficiency_project_skills`
--
ALTER TABLE `proficiency_project_skills`
  MODIFY `id` bigint(18) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile_projects`
--
ALTER TABLE `profile_projects`
  MODIFY `id` bigint(18) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile_project_skills`
--
ALTER TABLE `profile_project_skills`
  MODIFY `id` bigint(18) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(18) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(18) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `company_creator_fk` FOREIGN KEY (`creator`) REFERENCES `profiles` (`discord_id`),
  ADD CONSTRAINT `company_modifier_fk` FOREIGN KEY (`modifier`) REFERENCES `profiles` (`discord_id`);

--
-- Constraints for table `company_profiles`
--
ALTER TABLE `company_profiles`
  ADD CONSTRAINT `companyprofile_company_fk` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `companyprofile_creator_fk` FOREIGN KEY (`creator`) REFERENCES `profiles` (`discord_id`),
  ADD CONSTRAINT `companyprofile_modifier_fk` FOREIGN KEY (`modifier`) REFERENCES `profiles` (`discord_id`),
  ADD CONSTRAINT `companyprofile_profile_fk` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`discord_id`);

--
-- Constraints for table `proficiencies`
--
ALTER TABLE `proficiencies`
  ADD CONSTRAINT `proficiency_creator_fk` FOREIGN KEY (`creator`) REFERENCES `profiles` (`discord_id`),
  ADD CONSTRAINT `proficiency_modifier_fk` FOREIGN KEY (`modifier`) REFERENCES `profiles` (`discord_id`);

--
-- Constraints for table `proficiency_profile_skills`
--
ALTER TABLE `proficiency_profile_skills`
  ADD CONSTRAINT `profileskillsproficiencies_creator_fk` FOREIGN KEY (`creator`) REFERENCES `profiles` (`discord_id`),
  ADD CONSTRAINT `profileskillsproficiencies_modifier_fk` FOREIGN KEY (`modifier`) REFERENCES `profiles` (`discord_id`),
  ADD CONSTRAINT `profileskillsproficiencies_proficiency_fk` FOREIGN KEY (`proficiency_id`) REFERENCES `proficiencies` (`id`),
  ADD CONSTRAINT `profileskillsproficiencies_profile_fk` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`discord_id`),
  ADD CONSTRAINT `profileskillsproficiencies_skill_fk` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`);

--
-- Constraints for table `proficiency_project_skills`
--
ALTER TABLE `proficiency_project_skills`
  ADD CONSTRAINT `projectskillproficiency_creator_fk` FOREIGN KEY (`creator`) REFERENCES `profiles` (`discord_id`),
  ADD CONSTRAINT `projectskillproficiency_modifier_fk` FOREIGN KEY (`modifier`) REFERENCES `profiles` (`discord_id`),
  ADD CONSTRAINT `projectskillproficiency_proficiency_fk` FOREIGN KEY (`proficiency_id`) REFERENCES `proficiencies` (`id`),
  ADD CONSTRAINT `projectskillproficiency_project_fk` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `projectskillproficiency_skill_fk` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profile_modifier_fk` FOREIGN KEY (`modifier`) REFERENCES `profiles` (`discord_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profile_projects`
--
ALTER TABLE `profile_projects`
  ADD CONSTRAINT `profileprojects_creator_fk` FOREIGN KEY (`creator`) REFERENCES `profiles` (`discord_id`),
  ADD CONSTRAINT `profileprojects_modifier_fk` FOREIGN KEY (`modifier`) REFERENCES `profiles` (`discord_id`),
  ADD CONSTRAINT `profileprojects_profile_fk` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`discord_id`),
  ADD CONSTRAINT `profileprojects_project_fk` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Constraints for table `profile_project_skills`
--
ALTER TABLE `profile_project_skills`
  ADD CONSTRAINT `profileprojectskill_creator_fk` FOREIGN KEY (`creator`) REFERENCES `profiles` (`discord_id`),
  ADD CONSTRAINT `profileprojectskill_modifier_fk` FOREIGN KEY (`modifier`) REFERENCES `profiles` (`discord_id`),
  ADD CONSTRAINT `profileprojectskill_proficiencyprofileskill_fk` FOREIGN KEY (`proficiency_profile_skill_id`) REFERENCES `proficiency_profile_skills` (`id`),
  ADD CONSTRAINT `profileprojectskill_project_fk` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `project_company_fk` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `project_creator_fk` FOREIGN KEY (`creator`) REFERENCES `profiles` (`discord_id`),
  ADD CONSTRAINT `project_modifier_fk` FOREIGN KEY (`modifier`) REFERENCES `profiles` (`discord_id`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skill_creator_fk` FOREIGN KEY (`creator`) REFERENCES `profiles` (`discord_id`),
  ADD CONSTRAINT `skill_modifier_fk` FOREIGN KEY (`modifier`) REFERENCES `profiles` (`discord_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
