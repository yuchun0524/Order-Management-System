-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2020-09-07 09:53:37
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `buybook`
--

-- --------------------------------------------------------

--
-- 資料表結構 `員工`
--

CREATE TABLE `員工` (
  `員工編號` varchar(15) NOT NULL,
  `姓名` varchar(30) NOT NULL,
  `電話` varchar(30) NOT NULL,
  `組別` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `員工`
--

INSERT INTO `員工` (`員工編號`, `姓名`, `電話`, `組別`) VALUES
('1', '黃曉玲', '0944815672', '採買組'),
('10', '朱凱筑', '0936584998', '系統管理組'),
('11', '羅人豪', '0953268452', '人事組'),
('12', '張志亞', '0945182953', '閱覽組'),
('13', '許美惠', '0963284516', '閱覽組'),
('14', '韓惠珠', '0954516826', '典藏組'),
('15', '蒯姿彬', '0963182483', '多媒體視聽組'),
('16', '蔡志光', '0912654863', '資訊服務組'),
('17', '胡芳宜', '0945871268', '人事組'),
('18', '沈怡嘉', '0932658415', '典藏組'),
('19', '鍾麗貞', '0968592145', '會計組'),
('2', '陳瑜芳', '0958126571', '採買組'),
('20', '趙和明', '0998524587', '期刊組'),
('21', '買瑋燁', '0947812356', '閱覽組'),
('22', '陳欣怡', '0963125782', '編目組'),
('23', '康郁婷', '0969841527', '資訊服務組'),
('24', '徐犇', '0947856548', '推廣組'),
('25', '潘廷碩', '0931574898', '多媒體視聽組'),
('3', '方世喜', '0963584725', '採買組'),
('4', '陳浚明', '0957816482', '採買組'),
('5', '林婉如', '0957413985', '編目組'),
('6', '高瑞麟', '0951471352', '系統管理組'),
('7', '陳嘉軍', '0951478621', '期刊組'),
('8', '徐美瑤', '0938645972', '會計組'),
('9', '林子麒', '0941258776', '推廣組');

-- --------------------------------------------------------

--
-- 資料表結構 `書`
--

CREATE TABLE `書` (
  `訂單編號` varchar(15) NOT NULL,
  `書名` varchar(100) NOT NULL,
  `價錢` bigint(15) NOT NULL,
  `數量` bigint(15) NOT NULL,
  `主題` varchar(50) NOT NULL,
  `ISBN` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `書`
--

INSERT INTO `書` (`訂單編號`, `書名`, `價錢`, `數量`, `主題`, `ISBN`) VALUES
('13', '不怕我和世界不一樣：許芳宜的生命態度', 330, 1, '藝術設計；心理勵志', '4713510945759'),
('5', 'Hello World: Being Human in the Age of Algorithms', 900, 1, '電腦資訊', '9780393634990'),
('10', '五十年戰爭：冷戰時代的衝突與戰略', 680, 1, '社會法政', '9781606335789'),
('5', 'China Dream', 600, 1, '社會法政', '9781640092402'),
('14', '殖民想像與地方流變：荷蘭東印度公司與臺灣原住民', 450, 1, '教育史地', '9789570848137'),
('5', '台資銀行中國大陸債權確保實務：法院判例111-140', 540, 1, '社會法政', '9789570853216'),
('10', '媽媽的乖女兒', 300, 1, '文學小說', '9789571083810'),
('10', '對面的村莊', 240, 1, '文學小說', '9789571085746'),
('13', '基因：人類最親密的歷史', 510, 1, '自然科學', '9789571374765'),
('4', '共贏：中美貿易戰及未來經濟關係', 340, 1, '社會法政', '9789571376905'),
('4', '這才是心理學！', 340, 1, '心理勵志', '9789573284345'),
('10', '街屋台灣：100間街屋，100種看見台灣的方式！', 380, 1, '藝術設計；教育史地', '9789573284468'),
('11', '解憂雜貨店', 300, 1, '文學小說', '9789573330127'),
('13', '最後倖存者', 315, 1, '文學小說', '9789577411778'),
('6', '專業編劇養成術：透過具體的練習，真正學會撰寫劇本的方法', 300, 1, '電影戲劇', '9789577633880'),
('13', '天猶未光：二二八事件的真相、紀念與究責', 200, 1, '教育史地', '9789578018143'),
('11', '資本的世界史：財富哪裡來？經濟成長、貨幣與危機的歷史', 290, 1, '教育史地', '9789578630154'),
('12', '紅色滲透：中國媒體全球擴張的真相', 300, 1, '社會法政', '9789578654471'),
('13', '重返天安門：在失憶的人民共和國，追尋六四的歷史真相', 330, 1, '教育史地', '9789578654648'),
('9', '睡眠腦科學：從腦科學探討猝睡症、睡眠呼吸中止症、失眠、夢魘等各種睡眠障礙', 430, 1, '自然科學', '9789578759671'),
('6', '在回憶消逝之前', 300, 1, '文學小說', '9789578787872'),
('13', '顧喉嚨：喉嚨好，免疫力就好', 225, 1, '醫療保健', '9789578799776'),
('10', '大腦依戀障礙：為何我們總是用錯的方法，愛著對的人？', 300, 1, '心理勵志', '9789579001427'),
('11', '什麼是繪畫？：我們該如何觀看、如何思索所見之物？', 550, 1, '藝術設計', '9789579057448'),
('6', '醫道同源：當老莊遇見黃帝內經', 380, 1, '醫療保健；宗教哲學', '9789579314237'),
('11', '藝術家的一日廚房：學校沒教的藝術史：用家常菜向26位藝壇大師致敬', 550, 1, '藝術設計', '9789579689410'),
('8', '霓虹黯色：香港街道視覺文化記錄', 1100, 1, '藝術設計', '9789620443770'),
('8', '死後可幹的事：瀕死經驗是甚麼一回事？', 380, 1, '自然科學', '9789624575248'),
('9', '臺灣史上最有梗的臺灣史', 220, 1, '教育史地', '9789861372242'),
('10', '刻意練習：原創者全面解析，比天賦更關鍵的學習法', 250, 1, '心理勵志', '9789861754604'),
('7', '食與時：透過秒、分、時、日、週、月、年，看時間的鬼斧神工如何成就美味', 360, 1, '休閒旅遊', '9789862357422'),
('9', '不穩定無產階級：一個因全球化而生的當代新危險階級，他們為何產生，造成什麼問題，社會又該如何因應？', 350, 1, '社會法政', '9789862357538'),
('1', '自然老師沒教的事6：都市昆蟲記', 450, 1, '自然科學', '9789863208655'),
('10', '孤獨的冷漠：逃避型依戀障礙的分析與修復', 300, 1, '心理勵志', '9789863232124'),
('14', '自由主義的未來之戰：如何正面迎擊保守主義，構建新世紀的政經版圖與公民生活？', 410, 1, '社會法政；教育史地', '9789863446491'),
('9', '公共衛生概論', 220, 3, '公共衛生', '9789863621553'),
('7', '52種顏色的歷史冷知識：隱藏在顏色背後的慾望與想像', 290, 1, '教育史地；藝術設計', '9789863774907'),
('10', '用資訊圖表讀懂第二次世界大戰', 700, 1, '社會法政；教育史地', '9789864776474'),
('1', '灰犀牛 : 危機就在眼前,為何我們選擇視而不見? ', 350, 1, '社會法政', '9789864791880'),
('13', '我輩中人：寫給中年人的情書', 285, 1, '文學小說', '9789864793778'),
('10', '霍金大見解：留給世人的十個大哉問與解答', 400, 1, '自然科普', '9789864796359'),
('13', '圖解音控全書： 從基礎理論到現場應用實踐，第一本徹底解說Live Sound現場混音技術美學', 675, 1, '音樂藝術', '9789864800742'),
('6', '猜謎秀【金英夏作品集4】', 320, 1, '文學小說', '9789864893379'),
('9', '改變人類命運的科學家們【之一】：從哥白尼到牛頓，地球依然在轉動', 420, 1, '自然科學', '9789864931040'),
('6', '折返：山徑、公路、鐵道，往復內心與荒野的旅程', 280, 1, '休閒旅遊', '9789864931057'),
('12', '待辦事項這樣列，工作當場完成一半：只花兩分鐘、用五個詞，裝忙整理清單，你再也不會被「沒做完」追殺', 220, 1, '商業理財', '9789865612887'),
('3', '先知之後：伊斯蘭千年大分裂的起源', 420, 3, '教育史地', '9789869457224'),
('4', '心理界限：尊重自己的意願，3個練習設立「心理界限」，重拾完整自我', 300, 1, '心理勵志', '9789869547338'),
('10', '我是那：一位悟道者生命及行事的獨特證言', 520, 1, '宗教哲學', '9789869695879'),
('10', '被消失的科學神人‧特斯拉親筆自傳：交流電、無人駕駛、尼加拉發電站，他的每一次發現，都讓世界進步至少100年！', 180, 1, '自然科學', '9789869700603'),
('12', '海洋國家日本的構想', 260, 1, '社會法政', '9789869740180'),
('7', '設計的科學2：探索設計中的黃金比例', 310, 1, '藝術設計', '9789869751711'),
('2', '把你的心跟肺挖出來帶回鄉下餵狗', 560, 1, '文學小說', '9789869759236'),
('13', '3個箱子整理術：邏輯簡單，一看就懂，快速空間收納，打造理想的家！', 340, 1, '休閒旅遊', '9789869776608'),
('8', '人在中年', 450, 1, '心理勵志', '9789887940609'),
('8', '地震的故事', 400, 1, '自然科學', '9789888236305'),
('8', '香港電影與新加坡：冷戰時代星港文化連繫 1950-1965', 900, 1, '電影戲劇', '9789888390656'),
('9', '失衡：為甚麼我們無法擺脫肥胖與慢性病', 400, 1, '醫療保健', '9789888466948'),
('8', '字裏行間：賞析中國古典文學中的植物世界', 340, 1, '文學小說', '9789888571680'),
('8', '圖解雜談力：快速掌握49項精準聊天秘技', 290, 1, '商業理財', '9789888572342');

-- --------------------------------------------------------

--
-- 資料表結構 `書商`
--

CREATE TABLE `書商` (
  `書商編號` varchar(15) NOT NULL,
  `姓名` varchar(30) NOT NULL,
  `公司名稱` varchar(30) NOT NULL,
  `聯絡方式` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `書商`
--

INSERT INTO `書商` (`書商編號`, `姓名`, `公司名稱`, `聯絡方式`) VALUES
('1', '張光強', '滄海書局', '0957482689'),
('10', '宋偉鑫', '桑格文化', '0932578158'),
('11', '王添福', '天瓏', '0935789554'),
('12', '張幼琳', '文魁松崗圖書', '0922415786'),
('13', '1', '1', '1'),
('2', '李碧珠', '博碩文化', '0945663598'),
('3', '吳天祥', '天下文化', '0948215474'),
('4', '鞏俐芳', '敦煌書局', '0932687951'),
('5', '謝良', '儒林圖書', '0978315245'),
('6', '余修澤', '智勝文化', '0946284152'),
('7', '廖家麟', '碁峰資訊', '0915247563'),
('8', '談珮綺', '旗標', '0947815326'),
('9', '賴柏偉', '麗文文化', '0941365782');

-- --------------------------------------------------------

--
-- 資料表結構 `組別`
--

CREATE TABLE `組別` (
  `名稱` varchar(20) NOT NULL,
  `負責事務` varchar(50) NOT NULL,
  `聯絡方式` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `組別`
--

INSERT INTO `組別` (`名稱`, `負責事務`, `聯絡方式`) VALUES
('1', '1', '1'),
('人事組', '辦理人事管理事項', '06-2757575#65794'),
('典藏組', '書庫管理', '06-2757575#65750'),
('多媒體視聽組', '視聽資料及隨選視訊系統使用', '06-2757575#65790'),
('採買組', '買書及編列預算', '06-2757575#65710'),
('推廣組', '推廣活動、人員訓練', '06-2757575#65721'),
('會計組', '依法辦理歲計、會計及統計事項', '06-2757575#65735'),
('期刊組', '期刊薦購與管理', '06-2757575#65741'),
('系統管理組', '機構典藏相關事宜、學位論文上傳諮詢', '06-2757575#65770'),
('編目組', '圖書編目', '06-2757575#65720'),
('資訊服務組', '電子資源相關服務', '06-2757575#65780'),
('閱覽組', '圖書借還、空間借用', '06-2757575#65760');

-- --------------------------------------------------------

--
-- 資料表結構 `訂單`
--

CREATE TABLE `訂單` (
  `員工編號` varchar(15) NOT NULL,
  `書商編號` varchar(15) NOT NULL,
  `訂單編號` varchar(15) NOT NULL,
  `訂購日期` varchar(15) NOT NULL,
  `到貨日期` varchar(15) NOT NULL,
  `總價格` bigint(15) NOT NULL,
  `是否到貨` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `訂單`
--

INSERT INTO `訂單` (`員工編號`, `書商編號`, `訂單編號`, `訂購日期`, `到貨日期`, `總價格`, `是否到貨`) VALUES
('1', '1', '1', '2019/02/23', '2019/03/01', 800, '是'),
('3', '6', '10', '2019/03/15', '2019/03/20', 4250, '是'),
('4', '10', '11', '2019/03/16', '2019/03/24', 1690, '是'),
('2', '4', '12', '2019/05/06', '2019/05/07', 1200, '是'),
('2', '8', '13', '2019/03/18', '2019/03/28', 3210, '是'),
('1', '3', '14', '2019/03/20', '2019/03/29', 860, '是'),
('2', '2', '2', '2019/02/25', '2019/03/05', 560, '是'),
('1', '1', '3', '2019/03/01', '2019/03/12', 1260, '是'),
('2', '2', '4', '2019/03/01', '2019/03/08', 980, '是'),
('3', '7', '5', '2019/03/03', '2019/03/10', 2040, '是'),
('4', '5', '6', '2019/03/05', '2019/03/17', 1580, '是'),
('2', '9', '7', '2019/03/06', '2019/03/10', 960, '是'),
('3', '8', '8', '2019/03/09', '2019/03/14', 3860, '是'),
('4', '6', '9', '2019/03/14', '2019/03/20', 2480, '是');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `員工`
--
ALTER TABLE `員工`
  ADD PRIMARY KEY (`員工編號`),
  ADD UNIQUE KEY `員工編號` (`員工編號`),
  ADD KEY `組別` (`組別`),
  ADD KEY `_INDEX` (`電話`),
  ADD KEY `電話` (`電話`),
  ADD KEY `電話_2` (`電話`);

--
-- 資料表索引 `書`
--
ALTER TABLE `書`
  ADD PRIMARY KEY (`ISBN`),
  ADD UNIQUE KEY `ISBN` (`ISBN`),
  ADD KEY `訂單編號` (`訂單編號`);

--
-- 資料表索引 `書商`
--
ALTER TABLE `書商`
  ADD PRIMARY KEY (`書商編號`),
  ADD UNIQUE KEY `書商編號` (`書商編號`);

--
-- 資料表索引 `組別`
--
ALTER TABLE `組別`
  ADD PRIMARY KEY (`名稱`);

--
-- 資料表索引 `訂單`
--
ALTER TABLE `訂單`
  ADD PRIMARY KEY (`訂單編號`),
  ADD UNIQUE KEY `訂單編號` (`訂單編號`),
  ADD KEY `員工編號` (`員工編號`),
  ADD KEY `書商編號` (`書商編號`);

--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `員工`
--
ALTER TABLE `員工`
  ADD CONSTRAINT `員工_ibfk_1` FOREIGN KEY (`組別`) REFERENCES `組別` (`名稱`);

--
-- 資料表的 Constraints `書`
--
ALTER TABLE `書`
  ADD CONSTRAINT `書_ibfk_1` FOREIGN KEY (`訂單編號`) REFERENCES `訂單` (`訂單編號`);

--
-- 資料表的 Constraints `訂單`
--
ALTER TABLE `訂單`
  ADD CONSTRAINT `訂單_ibfk_1` FOREIGN KEY (`員工編號`) REFERENCES `員工` (`員工編號`),
  ADD CONSTRAINT `訂單_ibfk_2` FOREIGN KEY (`書商編號`) REFERENCES `書商` (`書商編號`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
