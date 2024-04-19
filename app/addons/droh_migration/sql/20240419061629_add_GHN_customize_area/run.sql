-- Mirgation DB for Integrate GHN
Insert into cscart_shipping_services(service_id,`status`, module, `code`) values(600, 'A', 'ghn', 'GHN');
INSERT INTO cscart_shipping_service_descriptions (`service_id`,`description`, `lang_code`) VALUES
	(600, 'Giao Hang Nhanh', 'en'),
    (600, 'Giao Hàng Nhanh', 'vi');
INSERT INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES
	('en', 'carrier_ghn', 'Giao Hang Nhanh'),
    ('vi', 'carrier_ghn', 'Giao Hàng Nhanh');
INSERT INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES
	('en', 'ship_ghn_shop_id', 'Shop Id'),
    ('vi', 'ship_ghn_shop_id', 'Shop Id');
INSERT INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES
	('en', 'select_district', 'Select District'),
    ('vi', 'select_district', 'Chọn Quận/Huyện');
INSERT INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES
	('en', 'select_ward', 'Select Ward'),
    ('vi', 'select_ward', 'Chọn Phường/Xã');
INSERT INTO cscart_language_values (`lang_code`, `name`, `value`) VALUES
	('en', 'ship_ghn_token', 'Token'),
    ('vi', 'ship_ghn_token', 'Token');
INSERT INTO `cscart_original_values` (`msgctxt`, `msgid`) VALUES
	('Languages::carrier_ghn', 'GHN');
INSERT INTO `cscart_original_values` (`msgctxt`, `msgid`) VALUES
	('Languages::ship_ghn_shop_id', 'Shop ID');
INSERT INTO `cscart_original_values` (`msgctxt`, `msgid`) VALUES
	('Languages::ship_ghn_token', 'Token');

-- Mirgation DB for mapping area local to GHN
CREATE TABLE cscart_map_code_areas (
    map_code_area_id int NOT NULL AUTO_INCREMENT,
    code_area_type varchar(20) NOT NULL,
    shipping_service_code varchar(20) NOT NULL,
    area_local_code varchar(20) NOT NULL,
    area_local_parent_code varchar(20) NOT NULL,
    area_external_id varchar(20),
    area_external_code varchar(20) NOT NULL,
    area_external_name varchar(100) NOT NULL,
    PRIMARY KEY (map_code_area_id)
);
-- --Insert map_code_area for district of HCM to GHN - HCM: 50 - 202
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code, 
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('district', 'GHN', '619', '50', '1442', '0201', 'Quận 1'),
('district', 'GHN', '620', '50', '1454', '0212', 'Quận 12'),
('district', 'GHN', '621', '50', '1463', '0218', 'Quận Thủ Đức'),
('district', 'GHN', '622', '50', '1451', '0209', 'Quận 9'),
('district', 'GHN', '623', '50', '1461', '0213', 'Quận Gò Vấp'),
('district', 'GHN', '624', '50', '1462', '0216', 'Quận Bình Thạnh'),
('district', 'GHN', '625', '50', '1455', '0214', 'Quận Tân Bình'),
('district', 'GHN', '626', '50', '1456', '0215', 'Quận Tân Phú'),
('district', 'GHN', '627', '50', '1457', '0217', 'Quận Phú Nhuận'),
('district', 'GHN', '628', '50', '1443', '0202', 'Quận 2'),
('district', 'GHN', '629', '50', '1444', '0203', 'Quận 3'),
('district', 'GHN', '630', '50', '1452', '0210', 'Quận 10'),
('district', 'GHN', '631', '50', '1453', '0211', 'Quận 11'),
('district', 'GHN', '632', '50', '1446', '0204', 'Quận 4'),
('district', 'GHN', '633', '50', '1447', '0205', 'Quận 5'),
('district', 'GHN', '634', '50', '1448', '0206', 'Quận 6'),
('district', 'GHN', '635', '50', '1450', '0208', 'Quận 8'),
('district', 'GHN', '636', '50', '1458', '0219', 'Quận Bình Tân'),
('district', 'GHN', '637', '50', '1449', '0207', 'Quận 7'),
('district', 'GHN', '638', '50', '1460', '0221', 'Huyện Củ Chi'),
('district', 'GHN', '639', '50', '1459', '0222', 'Huyện Hóc Môn'),
('district', 'GHN', '640', '50', '1533', '0220', 'Huyện Bình Chánh'),
('district', 'GHN', '641', '50', '1534', '0223', 'Huyện Nhà Bè'),
('district', 'GHN', '642', '50', '2090', '0224', 'Huyện Cần Giờ'),
('district', 'GHN', '777', '50', '3695', '3695', 'Thành phố Thủ Đức');

-- --Insert map_code_area for ward of HCM - Quận 1 to GHN - '619', '1442', '0201'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '9991', '619', '20110', '20110', 'Phường Tân Định'),
('ward', 'GHN', '9992', '619', '20106', '20106', 'Phường Đa Kao'),
('ward', 'GHN', '9993', '619', '20101', '20101', 'Phường Bến Nghé'),
('ward', 'GHN', '9994', '619', '20102', '20102', 'Phường Bến Thành'),
('ward', 'GHN', '9995', '619', '20108', '20108', 'Phường Nguyễn Thái Bình'),
('ward', 'GHN', '9996', '619', '20109', '20109', 'Phường Phạm Ngũ Lão'),
('ward', 'GHN', '9997', '619', '20104', '20104', 'Phường Cầu Ông Lãnh'),
('ward', 'GHN', '9998', '619', '20105', '20105', 'Phường Cô Giang'),
('ward', 'GHN', '9999', '619', '20107', '20107', 'Phường Nguyễn Cư Trinh'),
('ward', 'GHN', '10000', '619', '20103', '20103', 'Phường Cầu Kho');

-- --Insert map_code_area for ward of HCM - Quận 12 to GHN - '620', '50', '1454', '0212'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10001', '620', '21209', '21209', 'Phường Thạnh Xuân'),
('ward', 'GHN', '10002', '620', '21208', '21208', 'Phường Thạnh Lộc'),
('ward', 'GHN', '10003', '620', '21203', '21203', 'Phường Hiệp Thành'),
('ward', 'GHN', '10004', '620', '21210', '21210', 'Phường Thới An'),
('ward', 'GHN', '10005', '620', '21204', '21204', 'Phường Tân Chánh Hiệp'),
('ward', 'GHN', '10006', '620', '21201', '21201', 'Phường An Phú Đông'),
('ward', 'GHN', '10007', '620', '21206', '21206', 'Phường Tân Thới Hiệp'),
('ward', 'GHN', '10008', '620', '21211', '21211', 'Phường Trung Mỹ Tây'),
('ward', 'GHN', '10009', '620', '21205', '21205', 'Phường Tân Hưng Thuận'),
('ward', 'GHN', '10010', '620', '21202', '21202', 'Phường Đông Hưng Thuận'),
('ward', 'GHN', '10011', '620', '21207', '21207', 'Phường Tân Thới Nhất');

-- --Insert map_code_area for ward of HCM - Quận Thủ Đức to GHN - '621', '50', '1463', '0218' (No Local)
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '21812', '621', '21812', '21812', 'Phường Trường Thọ'),
('ward', 'GHN', '21811', '621', '21811', '21811', 'Phường Tam Phú'),
('ward', 'GHN', '21810', '621', '21810', '21810', 'Phường Tam Bình'),
('ward', 'GHN', '21809', '621', '21809', '21809', 'Phường Linh Xuân'),
('ward', 'GHN', '21808', '621', '21808', '21808', 'Phường Linh Trung'),
('ward', 'GHN', '21807', '621', '21807', '21807', 'Phường Linh Tây'),
('ward', 'GHN', '21806', '621', '21806', '21806', 'Phường Linh Đông'),
('ward', 'GHN', '21805', '621', '21211', '21805', 'Phường Linh Chiểu'),
('ward', 'GHN', '21804', '621', '21804', '21804', 'Phường Hiệp Bình Phước'),
('ward', 'GHN', '21803', '621', '21803', '21803', 'Phường Hiệp Bình Chánh'),
('ward', 'GHN', '21802', '621', '21802', '21802', 'Phường Bình Thọ'),
('ward', 'GHN', '21801', '621', '21801', '21801', 'Phường Bình Chiểu');

-- Insert HCM-Quận Thủ Đức Local
Insert Into	cscart_wards(
	ward_id, district_id, state_code, district_code, `code`, code_3pl, position, `status`)
    values
    (21812, 621, '50', '621', '21812', '', 1, 'A'),
    (21811, 621, '50', '621', '21811', '', 2, 'A'),
    (21810, 621, '50', '621', '21810', '', 3, 'A'),
    (21809, 621, '50', '621', '21809', '', 4, 'A'),
    (21808, 621, '50', '621', '21808', '', 5, 'A'),
    (21807, 621, '50', '621', '21807', '', 6, 'A'),
    (21806, 621, '50', '621', '21806', '', 7, 'A'),
    (21805, 621, '50', '621', '21805', '', 8, 'A'),
    (21804, 621, '50', '621', '21804', '', 9, 'A'),
    (21803, 621, '50', '621', '21803', '', 10, 'A'),
    (21802, 621, '50', '621', '21802', '', 11, 'A'),
    (21801, 621, '50', '621', '21801', '', 12, 'A');
Insert Into	cscart_ward_descriptions(
	ward_id, lang_code, `name`)
    values
    (21812, 'en', 'Phường Trường Thọ'),
    (21812, 'vi', 'Phường Trường Thọ'),
    (21811, 'en', 'Phường Tam Phú'),
    (21811, 'vi', 'Phường Tam Phú'),
    (21810, 'en', 'Phường Tam Bình'),
    (21810, 'vi', 'Phường Tam Bình'),
    (21809, 'en', 'Phường Linh Xuân'),
    (21809, 'vi', 'Phường Linh Xuân'),
    (21808, 'en', 'Phường Linh Trung'),
    (21808, 'vi', 'Phường Linh Trung'),
    (21807, 'en', 'Phường Linh Tây'),
    (21807, 'vi', 'Phường Linh Tây'),
	(21806, 'en', 'Phường Linh Đông'),
    (21806, 'vi', 'Phường Linh Đông'),
    (21805, 'en', 'Phường Linh Chiểu'),
    (21805, 'vi', 'Phường Linh Chiểu'),
    (21804, 'en', 'Phường Hiệp Bình Phước'),
    (21804, 'vi', 'Phường Hiệp Bình Phước'),
	(21803, 'en', 'Phường Hiệp Bình Chánh'),
    (21803, 'vi', 'Phường Hiệp Bình Chánh'),
    (21802, 'en', 'Phường Bình Thọ'),
    (21802, 'vi', 'Phường Bình Thọ'),
    (21801, 'en', 'Phường Bình Chiểu'),
    (21801, 'vi', 'Phường Bình Chiểu');
    
-- --Insert map_code_area for ward of HCM - Quận 9 to GHN - '622', '50', '1451', '0209' (No Local)
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '20913', '622', '20913', '20913', 'Phường Trường Thạnh'),
('ward', 'GHN', '20912', '622', '20912', '20912', 'Phường Tăng Nhơn Phú B'),
('ward', 'GHN', '20911', '622', '20911', '20911', 'Phường Tăng Nhơn Phú A'),
('ward', 'GHN', '20910', '622', '20910', '20910', 'Phường Tân Phú'),
('ward', 'GHN', '20909', '622', '20909', '20909', 'Phường Phước Long B'),
('ward', 'GHN', '20908', '622', '20908', '20908', 'Phường Phước Long A'),
('ward', 'GHN', '20907', '622', '20907', '20907', 'Phường Phước Bình'),
('ward', 'GHN', '20906', '622', '20906', '20906', 'Phường Phú Hữu'),
('ward', 'GHN', '20905', '622', '20905', '20905', 'Phường Long Trường'),
('ward', 'GHN', '20904', '622', '20904', '20904', 'Phường Long Thạnh Mỹ'),
('ward', 'GHN', '20903', '622', '20903', '20903', 'Phường Long Phước'),
('ward', 'GHN', '20902', '622', '20902', '20902', 'Phường Long Bình'),
('ward', 'GHN', '20901', '622', '20901', '20901', 'Phường Hiệp Phú');

-- Insert HCM-Quận 9 Local
Insert Into	cscart_wards(
	ward_id, district_id, state_code, district_code, `code`, code_3pl, position, `status`)
    values
    (20913, 622, '50', '622', '20913', '', 1, 'A'),
    (20912, 622, '50', '622', '20912', '', 2, 'A'),
    (20911, 622, '50', '622', '20911', '', 3, 'A'),
    (20910, 622, '50', '622', '20910', '', 4, 'A'),
    (20909, 622, '50', '622', '20909', '', 5, 'A'),
    (20908, 622, '50', '622', '20908', '', 6, 'A'),
    (20907, 622, '50', '622', '20907', '', 7, 'A'),
    (20906, 622, '50', '622', '20906', '', 8, 'A'),
    (20905, 622, '50', '622', '20905', '', 9, 'A'),
    (20904, 622, '50', '622', '20904', '', 10, 'A'),
    (20903, 622, '50', '622', '20903', '', 11, 'A'),
    (20902, 622, '50', '622', '20902', '', 12, 'A'),
    (20901, 622, '50', '622', '20901', '', 13, 'A');
Insert Into	cscart_ward_descriptions(
	ward_id, lang_code, `name`)
    values
    (20913, 'en', 'Phường Trường Thạnh'),
    (20913, 'vi', 'Phường Trường Thạnh'),
    (20912, 'en', 'Phường Tăng Nhơn Phú B'),
    (20912, 'vi', 'Phường Tăng Nhơn Phú B'),
    (20911, 'en', 'Phường Tăng Nhơn Phú A'),
    (20911, 'vi', 'Phường Tăng Nhơn Phú A'),
    (20910, 'en', 'Phường Tân Phú'),
    (20910, 'vi', 'Phường Tân Phú'),
    (20909, 'en', 'Phường Phước Long B'),
    (20909, 'vi', 'Phường Phước Long B'),
    (20908, 'en', 'Phường Phước Long A'),
    (20908, 'vi', 'Phường Phước Long A'),
	(20907, 'en', 'Phường Phước Bình'),
    (20907, 'vi', 'Phường Phước Bình'),
    (20906, 'en', 'Phường Phú Hữu'),
    (20906, 'vi', 'Phường Phú Hữu'),
    (20905, 'en', 'Phường Long Trường'),
    (20905, 'vi', 'Phường Long Trường'),
	(20904, 'en', 'Phường Long Thạnh Mỹ'),
    (20904, 'vi', 'Phường Long Thạnh Mỹ'),
    (20903, 'en', 'Phường Long Phước'),
    (20903, 'vi', 'Phường Long Phước'),
    (20902, 'en', 'Phường Long Bình'),
    (20902, 'vi', 'Phường Long Bình'),
    (20901, 'en', 'Phường Hiệp Phú'),
    (20901, 'vi', 'Phường Hiệp Phú');
    
-- --Insert map_code_area for ward of HCM - Quận Gò Vấp to GHN -  '623', '50', '1461', '0213'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10037', '623', '21311', '21311', 'Phường 15'),
('ward', 'GHN', '10038', '623', '21309', '21309', 'Phường 13'),
('ward', 'GHN', '10039', '623', '21313', '21313', 'Phường 17'),
('ward', 'GHN', '10040', '623', '21314', '21314', 'Phường 6'),
('ward', 'GHN', '10041', '623', '21312', '21312', 'Phường 16'),
('ward', 'GHN', '10042', '623', '21308', '21308', 'Phường 12'),
('ward', 'GHN', '10043', '623', '21310', '21310', 'Phường 14'),
('ward', 'GHN', '10044', '623', '21306', '21306', 'Phường 10'),
('ward', 'GHN', '10045', '623', '21304', '21304', 'Phường 5'),
('ward', 'GHN', '10046', '623', '21305', '21305', 'Phường 7'),
('ward', 'GHN', '10047', '623', '21303', '21303', 'Phường 4'),
('ward', 'GHN', '10048', '623', '21301', '21301', 'Phường 1'),
('ward', 'GHN', '10049', '623', '21316', '21316', 'Phường 9'),
('ward', 'GHN', '10050', '623', '21315', '21315', 'Phường 8'),
('ward', 'GHN', '10051', '623', '21307', '21307', 'Phường 11'),
('ward', 'GHN', '10052', '623', '21302', '21302', 'Phường 3');

-- --Insert map_code_area for ward of HCM - Quận Bình Thạnh to GHN -  '624', '50', '1462', '0216'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10053', '624', '21609', '21609', 'Phường 13'),
('ward', 'GHN', '10054', '624', '21607', '21607', 'Phường 11'),
('ward', 'GHN', '10055', '624', '21619', '21619', 'Phường 27'),
('ward', 'GHN', '10056', '624', '21618', '21618', 'Phường 26'),
('ward', 'GHN', '10057', '624', '21608', '21608', 'Phường 12'),
('ward', 'GHN', '10058', '624', '21617', '21617', 'Phường 25'),
('ward', 'GHN', '10059', '624', '21604', '21604', 'Phường 5'),
('ward', 'GHN', '10060', '624', '21606', '21606', 'Phường 7'),
('ward', 'GHN', '10061', '624', '21616', '21616', 'Phường 24'),
('ward', 'GHN', '10062', '624', '21605', '21605', 'Phường 6'),
('ward', 'GHN', '10063', '624', '21610', '21610', 'Phường 14'),
('ward', 'GHN', '10064', '624', '21611', '21611', 'Phường 15'),
('ward', 'GHN', '10065', '624', '21602', '21602', 'Phường 2'),
('ward', 'GHN', '10066', '624', '21601', '21601', 'Phường 1'),
('ward', 'GHN', '10067', '624', '21603', '21603', 'Phường 3'),
('ward', 'GHN', '10068', '624', '21612', '21612', 'Phường 17'),
('ward', 'GHN', '10069', '624', '21614', '21614', 'Phường 21'),
('ward', 'GHN', '10070', '624', '21615', '21615', 'Phường 22'),
('ward', 'GHN', '10071', '624', '21613', '21613', 'Phường 19'),
('ward', 'GHN', '10072', '624', '21620', '21620', 'Phường 28');

-- --Insert map_code_area for ward of HCM - Quận Tân Bình to GHN -  '625', '50', '1455', '0214'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10073', '625', '21402', '21402', 'Phường 2'),
('ward', 'GHN', '21404', '625', '21607', '21404', 'Phường 4'),
('ward', 'GHN', '10075', '625', '21412', '21412', 'Phường 12'),
('ward', 'GHN', '10076', '625', '21413', '21413', 'Phường 13'),
('ward', 'GHN', '10077', '625', '21401', '21401', 'Phường 1'),
('ward', 'GHN', '10078', '625', '21403', '21403', 'Phường 3'),
('ward', 'GHN', '10079', '625', '21411', '21411', 'Phường 11'),
('ward', 'GHN', '10080', '625', '21407', '21407', 'Phường 7'),
('ward', 'GHN', '10081', '625', '21405', '21405', 'Phường 5'),
('ward', 'GHN', '10082', '625', '21410', '21410', 'Phường 10'),
('ward', 'GHN', '10083', '625', '21406', '21406', 'Phường 6'),
('ward', 'GHN', '10084', '625', '21408', '21408', 'Phường 8'),
('ward', 'GHN', '10085', '625', '21409', '21409', 'Phường 9'),
('ward', 'GHN', '10086', '625', '21414', '21414', 'Phường 14'),
('ward', 'GHN', '10087', '625', '21415', '21415', 'Phường 15');

-- --Insert map_code_area for ward of HCM - Quận Tân Phú to GHN -  '626', '50', '1456', '0215'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10088', '626', '21508', '21508', 'Phường Tân Sơn Nhì'),
('ward', 'GHN', '10089', '626', '21511', '21511', 'Phường Tây Thạnh'),
('ward', 'GHN', '10090', '626', '21506', '21506', 'Phường Sơn Kỳ'),
('ward', 'GHN', '10091', '626', '21507', '21507', 'Phường Tân Quý'),
('ward', 'GHN', '10092', '626', '21509', '21509', 'Phường Tân Thành'),
('ward', 'GHN', '10093', '626', '21504', '21504', 'Phường Phú Thọ Hòa'),
('ward', 'GHN', '10094', '626', '21503', '21503', 'Phường Phú Thạnh'),
('ward', 'GHN', '10095', '626', '21505', '21505', 'Phường Phú Trung'),
('ward', 'GHN', '10096', '626', '21502', '21502', 'Phường Hòa Thạnh'),
('ward', 'GHN', '10097', '626', '21501', '21501', 'Phường Hiệp Tân'),
('ward', 'GHN', '10098', '626', '21510', '21510', 'Phường Tân Thới Hòa');

-- --Insert map_code_area for ward of HCM - Quận Phú Nhuận to GHN -  '627', '50', '1457', '0217'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10099', '627', '21704', '21704', 'Phường 4'),
('ward', 'GHN', '10100', '627', '21705', '21705', 'Phường 5'),
('ward', 'GHN', '10101', '627', '21708', '21708', 'Phường 9'),
('ward', 'GHN', '10102', '627', '21706', '21706', 'Phường 7'),
('ward', 'GHN', '10103', '627', '21703', '21703', 'Phường 3'),
('ward', 'GHN', '10104', '627', '21701', '21701', 'Phường 1'),
('ward', 'GHN', '10105', '627', '21702', '21702', 'Phường 2'),
('ward', 'GHN', '10106', '627', '21707', '21707', 'Phường 8'),
('ward', 'GHN', '10107', '627', '21714', '21714', 'Phường 15'),
('ward', 'GHN', '10108', '627', '21709', '21709', 'Phường 10'),
('ward', 'GHN', '10109', '627', '21710', '21710', 'Phường 11'),
('ward', 'GHN', '10110', '627', '21715', '21715', 'Phường 17'),
('ward', 'GHN', '10111', '627', '21713', '21713', 'Phường 14'),
('ward', 'GHN', '10112', '627', '21711', '21711', 'Phường 12'),
('ward', 'GHN', '10113', '627', '21712', '21712', 'Phường 13');

-- --Insert map_code_area for ward of HCM - Quận 2 to GHN -  '628', '50', '1443', '0202' (No Local)
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '20211', '628', '20211', '20211', 'Phường Thủ Thiêm'),
('ward', 'GHN', '20210', '628', '20210', '20210', 'Phường Thảo Điền'),
('ward', 'GHN', '20209', '628', '20209', '20209', 'Phường Thạnh Mỹ Lợi'),
('ward', 'GHN', '20208', '628', '20208', '20208', 'Phường Cát Lái'),
('ward', 'GHN', '20207', '628', '20207', '20207', 'Phường Bình Trưng Tây'),
('ward', 'GHN', '20206', '628', '20206', '20206', 'Phường Bình Trưng Đông'),
('ward', 'GHN', '20205', '628', '20205', '20205', 'Phường Bình Khánh'),
('ward', 'GHN', '20204', '628', '20204', '20204', 'Phường Bình An'),
('ward', 'GHN', '20203', '628', '20203', '20203', 'Phường An Phú'),
('ward', 'GHN', '20202', '628', '20202', '20202', 'Phường An Lợi Đông'),
('ward', 'GHN', '20201', '628', '20201', '20201', 'Phường An Khánh');

-- Insert HCM-Quận 2 Local
Insert Into	cscart_wards(
	ward_id, district_id, state_code, district_code, `code`, code_3pl, position, `status`)
    values
    (20211, 628, '50', '628', '20211', '', 1, 'A'),
    (20210, 628, '50', '628', '20210', '', 2, 'A'),
    (20209, 628, '50', '628', '20209', '', 3, 'A'),
    (20208, 628, '50', '628', '20208', '', 4, 'A'),
    (20207, 628, '50', '628', '20207', '', 5, 'A'),
    (20206, 628, '50', '628', '20206', '', 6, 'A'),
    (20205, 628, '50', '628', '20205', '', 7, 'A'),
    (20204, 628, '50', '628', '20204', '', 8, 'A'),
    (20203, 628, '50', '628', '20203', '', 9, 'A'),
    (20202, 628, '50', '628', '20202', '', 10, 'A'),
    (20201, 628, '50', '628', '20201', '', 11, 'A');
Insert Into	cscart_ward_descriptions(
	ward_id, lang_code, `name`)
    values
    (20211, 'en', 'Phường Thủ Thiêm'),
    (20211, 'vi', 'Phường Thủ Thiêm'),
    (20210, 'en', 'Phường Thảo Điền'),
    (20210, 'vi', 'Phường Thảo Điền'),
    (20209, 'en', 'Phường Thạnh Mỹ Lợi'),
    (20209, 'vi', 'Phường Thạnh Mỹ Lợi'),
    (20208, 'en', 'Phường Cát Lái'),
    (20208, 'vi', 'Phường Cát Lái'),
    (20207, 'en', 'Phường Bình Trưng Tây'),
    (20207, 'vi', 'Phường Bình Trưng Tây'),
    (20206, 'en', 'Phường Bình Trưng Đông'),
    (20206, 'vi', 'Phường Bình Trưng Đông'),
	(20205, 'en', 'Phường Bình Khánh'),
    (20205, 'vi', 'Phường Bình Khánh'),
    (20204, 'en', 'Phường Bình An'),
    (20204, 'vi', 'Phường Bình An'),
    (20203, 'en', 'Phường An Phú'),
    (20203, 'vi', 'Phường An Phú'),
	(20202, 'en', 'Phường An Lợi Đông'),
    (20202, 'vi', 'Phường An Lợi Đông'),
    (20201, 'en', 'Phường An Khánh'),
    (20201, 'vi', 'Phường An Khánh');
    
-- --Insert map_code_area for ward of HCM - Quận 3 to GHN -  '629', '50', '1444', '0203' 
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10125', '629', '20308', '20308', 'Phường 8'),
('ward', 'GHN', '10126', '629', '20307', '20307', 'Phường 7'),
('ward', 'GHN', '10127', '629', '20314', '20314', 'Phường 14'),
('ward', 'GHN', '10128', '629', '20312', '20312', 'Phường 12'),
('ward', 'GHN', '10129', '629', '20311', '20311', 'Phường 11'),
('ward', 'GHN', '10130', '629', '20313', '20313', 'Phường 13'),
('ward', 'GHN', '10131', '629', '20306', '20306', 'Phường 6'),
('ward', 'GHN', '10131', '629', '20309', '20309', 'Phường 9'),
('ward', 'GHN', '10133', '629', '20310', '20310', 'Phường 10'),
('ward', 'GHN', '10134', '629', '20304', '20304', 'Phường 4'),
('ward', 'GHN', '10135', '629', '20305', '20305', 'Phường 5'),
('ward', 'GHN', '10136', '629', '20303', '20303', 'Phường 3'),
('ward', 'GHN', '10137', '629', '20302', '20302', 'Phường 2'),
('ward', 'GHN', '10138', '629', '20301', '20301', 'Phường 1');

-- --Insert map_code_area for ward of HCM - Quận 10 to GHN -  630', '50', '1452', '0210'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10139', '630', '21015', '21015', 'Phường 15'),
('ward', 'GHN', '10140', '630', '21013', '21013', 'Phường 13'),
('ward', 'GHN', '10141', '630', '21014', '21014', 'Phường 14'),
('ward', 'GHN', '10142', '630', '21012', '21012', 'Phường 12'),
('ward', 'GHN', '10143', '630', '21011', '21011', 'Phường 11'),
('ward', 'GHN', '10144', '630', '21010', '21010', 'Phường 10'),
('ward', 'GHN', '10145', '630', '21009', '21009', 'Phường 9'),
('ward', 'GHN', '10146', '630', '21001', '21001', 'Phường 1'),
('ward', 'GHN', '10147', '630', '21008', '21008', 'Phường 8'),
('ward', 'GHN', '10148', '630', '21002', '21002', 'Phường 2'),
('ward', 'GHN', '10149', '630', '21004', '21004', 'Phường 4'),
('ward', 'GHN', '10150', '630', '21007', '21007', 'Phường 7'),
('ward', 'GHN', '10151', '630', '21005', '21005', 'Phường 5'),
('ward', 'GHN', '10152', '630', '21006', '21006', 'Phường 6'),
('ward', 'GHN', '10153', '630', '21003', '21003', 'Phường 3');

-- --Insert map_code_area for ward of HCM - Quận 11 to GHN -  '631', '50', '1453', '0211'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10154', '631', '21115', '21115', 'Phường 15'),
('ward', 'GHN', '10155', '631', '21105', '21105', 'Phường 5'),
('ward', 'GHN', '10156', '631', '21114', '21114', 'Phường 14'),
('ward', 'GHN', '10157', '631', '21111', '21111', 'Phường 11'),
('ward', 'GHN', '10158', '631', '21103', '21103', 'Phường 3'),
('ward', 'GHN', '10159', '631', '21110', '21110', 'Phường 10'),
('ward', 'GHN', '10160', '631', '21113', '21113', 'Phường 13'),
('ward', 'GHN', '10161', '631', '21108', '21108', 'Phường 8'),
('ward', 'GHN', '10162', '631', '21109', '21109', 'Phường 9'),
('ward', 'GHN', '10163', '631', '21112', '21112', 'Phường 12'),
('ward', 'GHN', '10164', '631', '21107', '21107', 'Phường 7'),
('ward', 'GHN', '10165', '631', '21106', '21106', 'Phường 6'),
('ward', 'GHN', '10166', '631', '21104', '21104', 'Phường 4'),
('ward', 'GHN', '10167', '631', '21101', '21101', 'Phường 1'),
('ward', 'GHN', '10168', '631', '21102', '21102', 'Phường 2'),
('ward', 'GHN', '10169', '631', '21116', '21116', 'Phường 16');

-- --Insert map_code_area for ward of HCM - Quận 4 to GHN -  '632', '50', '1446', '0204'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10170', '632', '20410', '20410', 'Phường 12'),
('ward', 'GHN', '10171', '632', '20411', '20411', 'Phường 13'),
('ward', 'GHN', '10172', '632', '20408', '20408', 'Phường 9'),
('ward', 'GHN', '10173', '632', '20406', '20406', 'Phường 6'),
('ward', 'GHN', '10174', '632', '20407', '20407', 'Phường 8'),
('ward', 'GHN', '10175', '632', '20409', '20409', 'Phường 10'),
('ward', 'GHN', '10176', '632', '20405', '20405', 'Phường 5'),
('ward', 'GHN', '10177', '632', '20415', '20415', 'Phường 18'),
('ward', 'GHN', '10178', '632', '20412', '20412', 'Phường 14'),
('ward', 'GHN', '10179', '632', '20404', '20404', 'Phường 4'),
('ward', 'GHN', '10180', '632', '20403', '20403', 'Phường 3'),
('ward', 'GHN', '10181', '632', '20414', '20414', 'Phường 16'),
('ward', 'GHN', '10182', '632', '20402', '20402', 'Phường 2'),
('ward', 'GHN', '10183', '632', '20413', '20413', 'Phường 15'),
('ward', 'GHN', '10184', '632', '20401', '20401', 'Phường 1');

-- --Insert map_code_area for ward of HCM - Quận 5 to GHN -  '633', '50', '1447', '0205'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10185', '633', '20504', '20504', 'Phường 4'),
('ward', 'GHN', '10186', '633', '20509', '20509', 'Phường 9'),
('ward', 'GHN', '10187', '633', '20503', '20503', 'Phường 3'),
('ward', 'GHN', '10188', '633', '20512', '20512', 'Phường 12'),
('ward', 'GHN', '10189', '633', '20502', '20502', 'Phường 2'),
('ward', 'GHN', '10190', '633', '20508', '20508', 'Phường 8'),
('ward', 'GHN', '10191', '633', '20515', '20515', 'Phường 15'),
('ward', 'GHN', '10192', '633', '20507', '20507', 'Phường 7'),
('ward', 'GHN', '10193', '633', '20501', '20501', 'Phường 1'),
('ward', 'GHN', '10194', '633', '20511', '20511', 'Phường 11'),
('ward', 'GHN', '10195', '633', '20514', '20514', 'Phường 14'),
('ward', 'GHN', '10196', '633', '20505', '20505', 'Phường 5'),
('ward', 'GHN', '10197', '633', '20506', '20506', 'Phường 6'),
('ward', 'GHN', '10198', '633', '20510', '20510', 'Phường 10'),
('ward', 'GHN', '10199', '633', '20513', '20513', 'Phường 13');

-- --Insert map_code_area for ward of HCM - Quận 6 to GHN -  '634', '50', '1448', '0206'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10200', '634', '20614', '20614', 'Phường 14'),
('ward', 'GHN', '10201', '634', '20613', '20613', 'Phường 13'),
('ward', 'GHN', '10202', '634', '20609', '20609', 'Phường 9'),
('ward', 'GHN', '10203', '634', '20606', '20606', 'Phường 6'),
('ward', 'GHN', '10204', '634', '20612', '20612', 'Phường 12'),
('ward', 'GHN', '10205', '634', '20605', '20605', 'Phường 5'),
('ward', 'GHN', '10206', '634', '20611', '20611', 'Phường 11'),
('ward', 'GHN', '10207', '634', '20602', '20602', 'Phường 2'),
('ward', 'GHN', '10208', '634', '20601', '20601', 'Phường 1'),
('ward', 'GHN', '10209', '634', '20604', '20604', 'Phường 4'),
('ward', 'GHN', '10210', '634', '20608', '20608', 'Phường 8'),
('ward', 'GHN', '10211', '634', '20603', '20603', 'Phường 3'),
('ward', 'GHN', '10212', '634', '20607', '20607', 'Phường 7'),
('ward', 'GHN', '10213', '634', '20610', '20610', 'Phường 10');

-- --Insert map_code_area for ward of HCM - Quận 8 to GHN - '635', '50', '1450', '0208'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10214', '635', '20808', '20808', 'Phường 8'),
('ward', 'GHN', '10215', '635', '20802', '20802', 'Phường 2'),
('ward', 'GHN', '10216', '635', '20801', '20801', 'Phường 1'),
('ward', 'GHN', '10217', '635', '20803', '20803', 'Phường 3'),
('ward', 'GHN', '10218', '635', '20811', '20811', 'Phường 11'),
('ward', 'GHN', '10219', '635', '20809', '20809', 'Phường 9'),
('ward', 'GHN', '10220', '635', '20810', '20810', 'Phường 10'),
('ward', 'GHN', '10221', '635', '20804', '20804', 'Phường 4'),
('ward', 'GHN', '10222', '635', '20813', '20813', 'Phường 13'),
('ward', 'GHN', '10223', '635', '20812', '20812', 'Phường 12'),
('ward', 'GHN', '10224', '635', '20805', '20805', 'Phường 5'),
('ward', 'GHN', '10225', '635', '20814', '20814', 'Phường 14'),
('ward', 'GHN', '10226', '635', '20806', '20806', 'Phường 6'),
('ward', 'GHN', '10227', '635', '20815', '20815', 'Phường 15'),
('ward', 'GHN', '10228', '635', '20816', '20816', 'Phường 16'),
('ward', 'GHN', '10229', '635', '20807', '20807', 'Phường 7');

-- --Insert map_code_area for ward of HCM - Quận Bình Tân to GHN - '636', '50', '1458', '0219'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10230', '636', '21903', '21903', 'Phường Bình Hưng Hòa'),
('ward', 'GHN', '10231', '636', '21904', '21904', 'Phường Bình Hưng Hòa A'),
('ward', 'GHN', '10232', '636', '21905', '21905', 'Phường Bình Hưng Hòa B'),
('ward', 'GHN', '10233', '636', '21906', '21906', 'Phường Bình Trị Đông'),
('ward', 'GHN', '10234', '636', '21907', '21907', 'Phường Bình Trị Đông A'),
('ward', 'GHN', '10235', '636', '21908', '21908', 'Phường Phường Bình Trị Đông B'),
('ward', 'GHN', '10236', '636', '21910', '21910', 'Phường Tân Tạo'),
('ward', 'GHN', '10237', '636', '21910', '21910', 'Phường Tân Tạo A'),
('ward', 'GHN', '10238', '636', '21901', '21901', 'Phường  An Lạc'),
('ward', 'GHN', '10239', '636', '21902', '21902', 'Phường An Lạc A');

-- --Insert map_code_area for ward of HCM - Quận 7 to GHN - '637', '50', '1449', '0207'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10240', '637', '20709', '20709', 'Phường Tân Thuận Đông'),
('ward', 'GHN', '10241', '637', '20710', '20710', 'Phường Tân Thuận Tây'),
('ward', 'GHN', '10242', '637', '20705', '20705', 'Phường Tân Kiểng'),
('ward', 'GHN', '10243', '637', '20704', '20704', 'Phường Tân Hưng'),
('ward', 'GHN', '10244', '637', '20701', '20701', 'Phường Bình Thuận'),
('ward', 'GHN', '10245', '637', '20708', '20708', 'Phường Tân Quy'),
('ward', 'GHN', '10246', '637', '20703', '20703', 'Phường Phú Thuận'),
('ward', 'GHN', '10247', '637', '20707', '20707', 'Phường Tân Phú'),
('ward', 'GHN', '10248', '637', '20706', '20706', 'Phường Tân Phong'),
('ward', 'GHN', '10249', '637', '20702', '20702', 'Phường Phú Mỹ');

-- --Insert map_code_area for ward of HCM - Huyện Củ Chi to GHN - '638', '50', '1460', '0221'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10250', '638', '22101', '22101', 'Thị trấn Củ Chi'),
('ward', 'GHN', '10251', '638', '22109', '22109', 'Xã Phú Mỹ Hưng'),
('ward', 'GHN', '10252', '638', '22103', '22103', 'Xã An Phú'),
('ward', 'GHN', '10253', '638', '22121', '22121', 'Xã Trung Lập Thượng'),
('ward', 'GHN', '10254', '638', '22102', '22102', 'Xã An Nhơn Tây'),
('ward', 'GHN', '10255', '638', '22106', '22106', 'Xã Nhuận Đức'),
('ward', 'GHN', '10256', '638', '22107', '22107', 'Xã Phạm Văn Cội'),
('ward', 'GHN', '10257', '638', '22108', '22108', 'Xã Phú Hòa Đông'),
('ward', 'GHN', '10258', '638', '22120', '22120', 'Xã Trung Lập Hạ'),
('ward', 'GHN', '10259', '638', '22119', '22119', 'Xã Trung An'),
('ward', 'GHN', '10260', '638', '22111', '22111', 'Xã Phước Thạnh'),
('ward', 'GHN', '10261', '638', '22110', '22110', 'Xã Phước Hiệp'),
('ward', 'GHN', '10262', '638', '22113', '22113', 'Xã Tân An Hội'),
('ward', 'GHN', '10263', '638', '22112', '22112', 'Xã Phước Vĩnh An'),
('ward', 'GHN', '10264', '638', '22118', '22118', 'Xã Thái Mỹ'),
('ward', 'GHN', '10265', '638', '22116', '22116', 'Xã Tân Thạnh Tây'),
('ward', 'GHN', '10266', '638', '22105', '22105', 'Xã Hòa Phú'),
('ward', 'GHN', '10267', '638', '22115', '22115', 'Xã Tân Thạnh Đông'),
('ward', 'GHN', '10268', '638', '22104', '22104', 'Xã Bình Mỹ'),
('ward', 'GHN', '10269', '638', '22114', '22114', 'Xã Tân Phú Trung'),
('ward', 'GHN', '10270', '638', '22117', '22117', 'Xã Tân Thông Hội');

-- --Insert map_code_area for ward of HCM - Huyện Hóc Môn to GHN - '639', '50', '1459', '0222'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10271', '639', '22201', '22201', 'Thị trấn Hóc Môn'),
('ward', 'GHN', '10272', '639', '22205', '22205', 'Xã Tân Hiệp'),
('ward', 'GHN', '10273', '639', '22204', '22204', 'Xã Nhị Bình'),
('ward', 'GHN', '10274', '639', '22203', '22203', 'Xã Đông Thạnh'),
('ward', 'GHN', '10275', '639', '22206', '22206', 'Xã Tân Thới Nhì'),
('ward', 'GHN', '10276', '639', '22208', '22208', 'Xã Thới Tam Thôn'),
('ward', 'GHN', '10277', '639', '22211', '22211', 'Xã Xuân Thới Sơn'),
('ward', 'GHN', '10278', '639', '22207', '22207', 'Xã Tân Xuân'),
('ward', 'GHN', '10279', '639', '22210', '22210', 'Xã Xuân Thới Đông'),
('ward', 'GHN', '10280', '639', '22209', '22209', 'Xã Trung Chánh'),
('ward', 'GHN', '10281', '639', '22212', '22212', 'Xã Xuân Thới Thượng'),
('ward', 'GHN', '10282', '639', '22202', '22202', 'Xã Bà Điểm');

-- --Insert map_code_area for ward of HCM - Huyện Bình Chánh to GHN - '640', '50', '1533', '0220'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10283', '640', '22001', '22001', 'Thị trấn Tân Túc'),
('ward', 'GHN', '10284', '640', '22009', '22009', 'Xã Phạm Văn Hai'),
('ward', 'GHN', '10285', '640', '22015', '22015', 'Xã Vĩnh Lộc A'),
('ward', 'GHN', '10286', '640', '22016', '22016', 'Xã Vĩnh Lộc B'),
('ward', 'GHN', '10287', '640', '22005', '22005', 'Xã Bình Lợi'),
('ward', 'GHN', '10288', '640', '22008', '22008', 'Xã Lê Minh Xuân'),
('ward', 'GHN', '10289', '640', '22013', '22013', 'Xã Tân Nhựt'),
('ward', 'GHN', '10290', '640', '22012', '22012', 'Xã Tân Kiên'),
('ward', 'GHN', '10291', '640', '22004', '22004', 'Xã Bình Hưng'),
('ward', 'GHN', '10292', '640', '22010', '22010', 'Xã Phong Phú'),
('ward', 'GHN', '10293', '640', '22002', '22002', 'Xã An Phú Tây'),
('ward', 'GHN', '10294', '640', '22007', '22007', 'Xã Hưng Long'),
('ward', 'GHN', '10295', '640', '22006', '22006', 'Xã Đa Phước'),
('ward', 'GHN', '10296', '640', '22014', '22014', 'Xã Tân Quý Tây'),
('ward', 'GHN', '10297', '640', '22003', '22003', 'Xã Bình Chánh'),
('ward', 'GHN', '10298', '640', '22011', '22011', 'Xã Quy Đức');

-- --Insert map_code_area for ward of HCM - Huyện Nhà Bè to GHN - '641', '50', '1534', '0223'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10299', '641', '22301', '22301', 'Thị trấn Nhà Bè'),
('ward', 'GHN', '10300', '641', '22306', '22306', 'Xã Phước Kiển'),
('ward', 'GHN', '10301', '641', '22307', '22307', 'Xã Phước Lộc'),
('ward', 'GHN', '10302', '641', '22304', '22304', 'Xã Nhơn Đức'),
('ward', 'GHN', '10303', '641', '22305', '22305', 'Xã Phú Xuân'),
('ward', 'GHN', '10304', '641', '22303', '22303', 'Xã Long Thới'),
('ward', 'GHN', '10305', '641', '22302', '22302', 'Xã Hiệp Phước');

-- --Insert map_code_area for ward of HCM - Huyện Cần Giờ to GHN - '642', '50', '2090', '0224'

Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10306', '642', '22401', '22401', 'Thị trấn Cần Thạnh'),
('ward', 'GHN', '10307', '642', '22403', '22403', 'Xã Bình Khánh'),
('ward', 'GHN', '10308', '642', '22406', '22406', 'Xã Tam Thôn Hiệp'),
('ward', 'GHN', '10309', '642', '22402', '22402', 'Xã An Thới Đông'),
('ward', 'GHN', '10310', '642', '22407', '22407', 'Xã Thạnh An'),
('ward', 'GHN', '10311', '642', '22404', '22404', 'Xã Long Hòa'),
('ward', 'GHN', '10312', '642', '22405', '22405', 'Xã Lý Nhơn');

-- --Insert map_code_area for ward of HCM - Thành phố Thủ Đức to GHN - '777', '50', '3695', '3695'
Insert Into cscart_map_code_areas(
	code_area_type, 
	shipping_service_code, 
    area_local_code,
    area_local_parent_code,
    area_external_id,
    area_external_code,
    area_external_name)
values
('ward', 'GHN', '10012', '777', '90735', '90735', 'Phường Linh Xuân'),
('ward', 'GHN', '10013', '777', '90736', '90736', 'Phường Bình Chiểu'),
('ward', 'GHN', '10014', '777', '90737', '90737', 'Phường Linh Trung'),
('ward', 'GHN', '10015', '777', '90738', '90738', 'Phường Tam Bình'),
('ward', 'GHN', '10016', '777', '90739', '90739', 'Phường Tam Phú'),
('ward', 'GHN', '10017', '777', '90740', '90740', 'Phường Hiệp Bình Phước'),
('ward', 'GHN', '10018', '777', '90741', '90741', 'Phường Hiệp Bình Chánh'),
('ward', 'GHN', '10019', '777', '90742', '90742', 'Phường Linh Chiểu'),
('ward', 'GHN', '10020', '777', '90743', '90743', 'Phường Linh Tây'),
('ward', 'GHN', '10021', '777', '90744', '90744', 'Phường Linh Đông'),
('ward', 'GHN', '10022', '777', '90745', '90745', 'Phường Bình Thọ'),
('ward', 'GHN', '10023', '777', '90746', '90746', 'Phường Trường Thọ'),
('ward', 'GHN', '10024', '777', '90751', '90751', 'Phường Long Bình'),
('ward', 'GHN', '10025', '777', '90752', '90752', 'Phường Long Thạnh Mỹ'),
('ward', 'GHN', '10026', '777', '90753', '90753', 'Phường Tân Phú'),
('ward', 'GHN', '10027', '777', '90754', '90754', 'Phường Hiệp Phú'),
('ward', 'GHN', '10028', '777', '90755', '90755', 'Phường Tăng Nhơn Phú A'),
('ward', 'GHN', '10029', '777', '90756', '90756', 'Phường Tăng Nhơn Phú B'),
('ward', 'GHN', '10030', '777', '90758', '90758', 'Phường Phước Long B'),
('ward', 'GHN', '10031', '777', '90757', '90757', 'Phường Phước Long A'),
('ward', 'GHN', '10032', '777', '90759', '90759', 'Phường Trường Thạnh'),
('ward', 'GHN', '10033', '777', '90760', '90760', 'Phường Long Phước'),
('ward', 'GHN', '10034', '777', '90761', '90761', 'Phường Long Trường'),
('ward', 'GHN', '10035', '777', '90762', '90762', 'Phường Phước Bình'),
('ward', 'GHN', '10036', '777', '90763', '90763', 'Phường Phú Hữu'),
('ward', 'GHN', '10114', '777', '90764', '90764', 'Phường Thảo Điền'),
('ward', 'GHN', '10115', '777', '90765', '90765', 'Phường An Phú'),
('ward', 'GHN', '10117', '777', '90766', '90766', 'Phường Bình Trưng Đông'),
('ward', 'GHN', '10118', '777', '90767', '90767', 'Phường Bình Trưng Tây'),
('ward', 'GHN', '10120', '777', '90768', '90768', 'Phường An Khánh'),
('ward', 'GHN', '10121', '777', '90747', '90747', 'Phường Cát Lái'),
('ward', 'GHN', '10122', '777', '90748', '90748', 'Phường Thạnh Mỹ Lợi'),
('ward', 'GHN', '10123', '777', '90749', '90749', 'Phường An Lợi Đông'),
('ward', 'GHN', '10124', '777', '90750', '90750', 'Phường Thủ Thiêm');

-- Add district and ward to companies table
ALTER TABLE cscart_companies ADD district varchar(20);
ALTER TABLE cscart_companies ADD ward varchar(20);
-- Insert District and Ward fields
Insert Into cscart_profile_fields(
	field_id, field_name, profile_show, profile_required, checkout_show, checkout_required, partner_show, partner_required, storefront_show, field_type, profile_type, position, is_default, section, matching_id, class, wrapper_class, autocomplete_type
) values
(54, 'b_district', 'Y', 'Y', 'Y', 'N', 'N', 'N', 'Y', 'S', 'U', 0, 'N', 'B', 55, '', '', ''),
(55, 's_district', 'Y', 'Y', 'Y', 'Y', 'N', 'N', 'Y', 'S', 'U', 51, 'N', 'S', 54, 'shipping-state', '', ''),
(56, 'b_ward', 'Y', 'Y', 'Y', 'N', 'N', 'N', 'Y', 'S', 'U', 52, 'N', 'B', 57, '', '', ''),
(57, 's_ward', 'Y', 'Y', 'Y', 'Y', 'N', 'N', 'Y', 'S', 'U', 52, 'N', 'S', 56, '', '', ''),
(60, 'v_district', 'Y', 'Y', 'N', 'N', 'N', 'N', 'Y', 'S', 'S', 160, 'N', 'C', 0, '', '', ''),
(61, 'v_ward', 'Y', 'Y', 'N', 'N', 'N', 'N', 'Y', 'S', 'S', 170, 'N', 'C', 0, '', '', '');

Insert Into cscart_profile_field_descriptions (
	object_id, `description`, object_type, lang_code
) values
('54', 'District', 'F', 'en'),
('54', 'District', 'F', 'vi'),
('56', 'Ward', 'F', 'en'),
('56', 'Ward', 'F', 'vi'),
('55', 'District', 'F', 'en'),
('55', 'District', 'F', 'vi'),
('57', 'Ward', 'F', 'en'),
('57', 'Ward', 'F', 'vi'),
('60', 'District', 'F', 'en'),
('60', 'District', 'F', 'vi'),
('61', 'Ward', 'F', 'en'),
('61', 'Ward', 'F', 'vi');

-- Insert status for shipment
Insert Into cscart_statuses (status_id, status, type, is_default, position)
values
(21, 'B', 'S', 'N', 0),
(22, 'C', 'S', 'N', 1),
(23, 'D', 'S', 'N', 3),
(24, 'E', 'S', 'N', 4),
(25, 'F', 'S', 'N', 7),
(26, 'G', 'S', 'N', 8),
(27, 'H', 'S', 'N', 9),
(28, 'I', 'S', 'N', 10);

insert into cscart_status_descriptions
(status_id, description, email_subj, email_header, lang_code)
values
(21, 'Ready To Pick', '', NULL, 'en'),
(21, 'Ready To Pick', '', NULL, 'vi'),
(22, 'Picking', '', NULL, 'en'),
(22, 'Picking', '', NULL, 'vi'),
(23, 'Delivering', '', NULL, 'en'),
(23, 'Delivering', '', NULL, 'vi'),
(24, 'Deliveried', '', NULL, 'en'),
(24, 'Deliveried', '', NULL, 'vi'),
(25, 'Lost', '', NULL, 'en'),
(25, 'Lost', '', NULL, 'vi'),
(26, 'Retuning', '', NULL, 'en'),
(26, 'Retuning', '', NULL, 'vi'),
(27, 'Retuned', '', NULL, 'en'),
(27, 'Retuned', '', NULL, 'vi'),
(28, 'Retun Fail', '', NULL, 'en'),
(28, 'Retun Fail', '', NULL, 'vi');