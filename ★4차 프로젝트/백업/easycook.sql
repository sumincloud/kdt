-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-07-10 05:05
-- 서버 버전: 10.4.27-MariaDB
-- PHP 버전: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `easycook`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `academy_info`
--

CREATE TABLE `academy_info` (
  `no` int(11) NOT NULL,
  `category1` varchar(255) NOT NULL DEFAULT '',
  `code` varchar(255) NOT NULL DEFAULT '',
  `price` varchar(255) NOT NULL DEFAULT '',
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `academy_info`
--

INSERT INTO `academy_info` (`no`, `category1`, `code`, `price`, `datetime`) VALUES
(1, '한식조리기능사', '20240710A01', '140000', '2024-07-09 00:00:00');

-- --------------------------------------------------------

--
-- 테이블 구조 `academy_list`
--

CREATE TABLE `academy_list` (
  `class_no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `code` varchar(255) NOT NULL DEFAULT '',
  `category1` varchar(255) NOT NULL DEFAULT '',
  `category2` varchar(255) NOT NULL DEFAULT '',
  `category3` varchar(255) NOT NULL DEFAULT '',
  `teacher_code` varchar(255) NOT NULL DEFAULT '',
  `teacher` varchar(255) NOT NULL DEFAULT '',
  `place` varchar(255) NOT NULL DEFAULT '',
  `phone` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL DEFAULT '',
  `member_num` int(11) NOT NULL,
  `nth` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `class_status` varchar(10) NOT NULL DEFAULT '',
  `class_end` varchar(10) NOT NULL DEFAULT '',
  `thumnail_img` varchar(255) NOT NULL DEFAULT '',
  `img` varchar(255) NOT NULL DEFAULT '',
  `detail` varchar(255) NOT NULL DEFAULT '',
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `academy_list`
--

INSERT INTO `academy_list` (`class_no`, `name`, `code`, `category1`, `category2`, `category3`, `teacher_code`, `teacher`, `place`, `phone`, `grade`, `member_num`, `nth`, `start_date`, `end_date`, `start_time`, `end_time`, `class_status`, `class_end`, `thumnail_img`, `img`, `detail`, `datetime`) VALUES
(1, '나도 할 수 있다! 한식조리기능사 자격증반', '20240710A01', '한식조리기능사', '자격증', '평일', '202406EC01', '나프로', '서울시 강남구 00로 00빌딩 3층, 이지쿡', 1012341234, '상', 20, 1, '2024-07-08', '2024-08-08', '09:00:00', '18:00:00', '개설', '수업중', '01.img', '02.img', '상세설명', '2024-07-09 00:00:00');

-- --------------------------------------------------------

--
-- 테이블 구조 `attendance`
--

CREATE TABLE `attendance` (
  `no` int(11) NOT NULL,
  `class_no` int(11) NOT NULL,
  `id` varchar(255) NOT NULL DEFAULT '',
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `attendance`
--

INSERT INTO `attendance` (`no`, `class_no`, `id`, `datetime`) VALUES
(1, 1, 'student1', '2024-07-09 00:00:00');

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `no` int(11) NOT NULL,
  `class_no` int(11) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `memo` varchar(255) NOT NULL DEFAULT '',
  `id` varchar(255) NOT NULL DEFAULT '',
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`no`, `class_no`, `title`, `memo`, `id`, `datetime`) VALUES
(1, 1, '', '', 'professor', '2024-07-09 00:00:00');

-- --------------------------------------------------------

--
-- 테이블 구조 `cart`
--

CREATE TABLE `cart` (
  `no` int(11) NOT NULL,
  `class_no` int(11) NOT NULL,
  `id` varchar(20) NOT NULL DEFAULT '',
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `my_order`
--

CREATE TABLE `my_order` (
  `no` int(11) NOT NULL,
  `class_no` int(11) NOT NULL,
  `id` varchar(20) NOT NULL DEFAULT '',
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `question`
--

CREATE TABLE `question` (
  `no` int(11) NOT NULL,
  `class_no` int(11) NOT NULL,
  `question_id` varchar(255) NOT NULL DEFAULT '',
  `question` varchar(255) NOT NULL DEFAULT '',
  `question_memo` varchar(255) NOT NULL DEFAULT '',
  `question_time` datetime NOT NULL DEFAULT current_timestamp(),
  `answer_id` varchar(255) NOT NULL DEFAULT '',
  `answer` varchar(255) NOT NULL DEFAULT '',
  `answer_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `question`
--

INSERT INTO `question` (`no`, `class_no`, `question_id`, `question`, `question_memo`, `question_time`, `answer_id`, `answer`, `answer_time`) VALUES
(1, 1, 'student1', '안녕하세요', '안녕하세요.창업을 해보려고 하는데, 제가 베이킹이 완전 처음이라 혹시 선수학습이 필요할까요? 또 재료비는 따로 제출해야 하나요?', '2024-07-08 00:00:00', 'professor', '답변내용', '2024-07-09 00:00:00');

-- --------------------------------------------------------

--
-- 테이블 구조 `register`
--

CREATE TABLE `register` (
  `no` int(11) NOT NULL,
  `id` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `teacher` varchar(20) NOT NULL DEFAULT '',
  `teacher_code` varchar(255) NOT NULL DEFAULT '',
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `review`
--

CREATE TABLE `review` (
  `no` int(11) NOT NULL,
  `class_no` int(11) NOT NULL,
  `star` int(11) NOT NULL,
  `review` varchar(255) NOT NULL DEFAULT '',
  `end` datetime NOT NULL,
  `id` varchar(255) NOT NULL DEFAULT '',
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `room`
--

CREATE TABLE `room` (
  `no` int(11) NOT NULL,
  `class_no` int(11) NOT NULL,
  `room_date` datetime NOT NULL,
  `room_time` time NOT NULL,
  `id` varchar(255) NOT NULL DEFAULT '',
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `student_list`
--

CREATE TABLE `student_list` (
  `no` int(11) NOT NULL,
  `class_no` int(11) NOT NULL,
  `id` varchar(255) NOT NULL DEFAULT '',
  `student_status` varchar(255) NOT NULL DEFAULT '',
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `student_list`
--

INSERT INTO `student_list` (`no`, `class_no`, `id`, `student_status`, `datetime`) VALUES
(1, 1, 'student1', '수강중', '2024-07-09 00:00:00');

-- --------------------------------------------------------

--
-- 테이블 구조 `teacher_list`
--

CREATE TABLE `teacher_list` (
  `no` int(11) NOT NULL,
  `teacher_name` varchar(255) NOT NULL DEFAULT '',
  `teacher_code` varchar(255) NOT NULL DEFAULT '',
  `in_date` datetime NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `teacher_list`
--

INSERT INTO `teacher_list` (`no`, `teacher_name`, `teacher_code`, `in_date`, `datetime`) VALUES
(1, '나프로', '202406EC01', '2024-06-30 00:00:00', '2024-07-09 00:00:00');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `academy_info`
--
ALTER TABLE `academy_info`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `datetime` (`datetime`);

--
-- 테이블의 인덱스 `academy_list`
--
ALTER TABLE `academy_list`
  ADD PRIMARY KEY (`class_no`),
  ADD KEY `datetime` (`datetime`);

--
-- 테이블의 인덱스 `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`no`),
  ADD KEY `datetime` (`datetime`);

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`no`),
  ADD KEY `datetime` (`datetime`);

--
-- 테이블의 인덱스 `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`no`),
  ADD KEY `datetime` (`datetime`);

--
-- 테이블의 인덱스 `my_order`
--
ALTER TABLE `my_order`
  ADD PRIMARY KEY (`no`),
  ADD KEY `datetime` (`datetime`);

--
-- 테이블의 인덱스 `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`no`),
  ADD KEY `answer_time` (`answer_time`);

--
-- 테이블의 인덱스 `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `datetime` (`datetime`);

--
-- 테이블의 인덱스 `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`no`),
  ADD KEY `datetime` (`datetime`);

--
-- 테이블의 인덱스 `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`no`),
  ADD KEY `datetime` (`datetime`);

--
-- 테이블의 인덱스 `student_list`
--
ALTER TABLE `student_list`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `datetime` (`datetime`);

--
-- 테이블의 인덱스 `teacher_list`
--
ALTER TABLE `teacher_list`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `teacher_code` (`teacher_code`),
  ADD KEY `datetime` (`datetime`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `academy_info`
--
ALTER TABLE `academy_info`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `academy_list`
--
ALTER TABLE `academy_list`
  MODIFY `class_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `attendance`
--
ALTER TABLE `attendance`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `cart`
--
ALTER TABLE `cart`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `my_order`
--
ALTER TABLE `my_order`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `question`
--
ALTER TABLE `question`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `register`
--
ALTER TABLE `register`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `review`
--
ALTER TABLE `review`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `room`
--
ALTER TABLE `room`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `student_list`
--
ALTER TABLE `student_list`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `teacher_list`
--
ALTER TABLE `teacher_list`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
