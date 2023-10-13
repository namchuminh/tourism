<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'TrangChu';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['dia-diem'] = 'Website/DiemDen/index';
$route['dia-diem/(:any)'] = 'Website/DiemDen/Detail/$1';

$route['tin-tuc'] = 'Website/TinTuc/index';
$route['tin-tuc/(:any)'] = 'Website/TinTuc/Detail/$1';
$route['tin-tuc/trang/(:any)'] = 'Website/TinTuc/Page/$1';

$route['tim-kiem'] = 'TrangChu/Search';


$route['tour-du-lich'] = 'Website/ChuyenDi/index';
$route['tour-du-lich/(:any)'] = 'Website/ChuyenDi/Detail/$1';
$route['tour-du-lich/trang/(:any)'] = 'Website/ChuyenDi/Page/$1';
$route['tim-kiem-tour'] = 'Website/ChuyenDi/Search';


$route['dang-nhap'] = 'Website/DangNhap';
$route['dang-xuat'] = 'Website/DangXuat';
$route['dang-ky'] = 'Website/DangNhap/Register';

$route['khach-hang'] = 'Website/KhachHang';


//Route admin login
$route['admin'] = 'Admin/TrangChu';
$route['admin/thong-ke-doanh-thu'] = 'Admin/TrangChu/getSumRevenue';
$route['admin/dang-nhap'] = 'Admin/DangNhap';
$route['admin/dang-xuat'] = 'Admin/DangXuat';

//Route profile admin
$route['admin/ca-nhan'] = 'Admin/CaNhan';

//Route admin blog
$route['admin/bai-viet/them'] = 'Admin/BaiViet/Add';
$route['admin/bai-viet'] = 'Admin/BaiViet/index';
$route['admin/bai-viet/trang/(:any)'] = 'Admin/BaiViet/Page/$1';
$route['admin/bai-viet/sua/(:any)'] = 'Admin/BaiViet/Update/$1';
$route['admin/bai-viet/them-thung-rac/(:any)'] = 'Admin/BaiViet/remove/$1';
$route['admin/bai-viet/thung-rac'] = 'Admin/BaiViet/trash';
$route['admin/bai-viet/thung-rac/trang/(:any)'] = 'Admin/BaiViet/PageTrash/$1';
$route['admin/bai-viet/thung-rac/khoi-phuc/(:any)'] = 'Admin/BaiViet/reset/$1';
$route['admin/bai-viet/thung-rac/khoi-phuc'] = 'Admin/BaiViet/resetAll';
$route['admin/bai-viet/thung-rac/xoa/(:any)'] = 'Admin/BaiViet/delete/$1';
$route['admin/bai-viet/thung-rac/xoa'] = 'Admin/BaiViet/deleteAll/$1';


//Route admin tour
$route['admin/chuyen-di/them'] = 'Admin/ChuyenDi/Add';
$route['admin/chuyen-di'] = 'Admin/ChuyenDi/index';
$route['admin/chuyen-di/trang/(:any)'] = 'Admin/ChuyenDi/Page/$1';
$route['admin/chuyen-di/sua/(:any)'] = 'Admin/ChuyenDi/Update/$1';
$route['admin/chuyen-di/them-thung-rac/(:any)'] = 'Admin/ChuyenDi/remove/$1';
$route['admin/chuyen-di/thung-rac'] = 'Admin/ChuyenDi/trash';
$route['admin/chuyen-di/thung-rac/trang/(:any)'] = 'Admin/ChuyenDi/PageTrash/$1';
$route['admin/chuyen-di/thung-rac/khoi-phuc/(:any)'] = 'Admin/ChuyenDi/reset/$1';
$route['admin/chuyen-di/thung-rac/khoi-phuc'] = 'Admin/ChuyenDi/resetAll';
$route['admin/chuyen-di/thung-rac/xoa/(:any)'] = 'Admin/ChuyenDi/delete/$1';
$route['admin/chuyen-di/thung-rac/xoa'] = 'Admin/ChuyenDi/deleteAll/$1';

$route['admin/chuyen-di/hinh-anh/(:any)'] = 'Admin/ChuyenDi/Image/$1';
$route['admin/chuyen-di/lich-trinh/(:any)'] = 'Admin/ChuyenDi/List/$1';
$route['admin/chuyen-di/vi-tri/(:any)'] = 'Admin/ChuyenDi/Location/$1';

//Route admin category
$route['admin/chuyen-muc/them'] = 'Admin/ChuyenMuc/Add';
$route['admin/chuyen-muc'] = 'Admin/ChuyenMuc/index';
$route['admin/chuyen-muc/trang/(:any)'] = 'Admin/ChuyenMuc/Page/$1';
$route['admin/chuyen-muc/sua/(:any)'] = 'Admin/ChuyenMuc/Update/$1';
$route['admin/chuyen-muc/them-thung-rac/(:any)'] = 'Admin/ChuyenMuc/remove/$1';
$route['admin/chuyen-muc/thung-rac'] = 'Admin/ChuyenMuc/trash';
$route['admin/chuyen-muc/thung-rac/trang/(:any)'] = 'Admin/ChuyenMuc/PageTrash/$1';
$route['admin/chuyen-muc/thung-rac/khoi-phuc/(:any)'] = 'Admin/ChuyenMuc/reset/$1';
$route['admin/chuyen-muc/thung-rac/khoi-phuc'] = 'Admin/ChuyenMuc/resetAll';
$route['admin/chuyen-muc/thung-rac/xoa/(:any)'] = 'Admin/ChuyenMuc/delete/$1';
$route['admin/chuyen-muc/thung-rac/xoa'] = 'Admin/ChuyenMuc/deleteAll/$1';


//Route admin location
$route['admin/dia-diem/them'] = 'Admin/DiaDiem/Add';
$route['admin/dia-diem'] = 'Admin/DiaDiem/index';
$route['admin/dia-diem/trang/(:any)'] = 'Admin/DiaDiem/Page/$1';
$route['admin/dia-diem/sua/(:any)'] = 'Admin/DiaDiem/Update/$1';
$route['admin/dia-diem/them-thung-rac/(:any)'] = 'Admin/DiaDiem/remove/$1';
$route['admin/dia-diem/thung-rac'] = 'Admin/DiaDiem/trash';
$route['admin/dia-diem/thung-rac/trang/(:any)'] = 'Admin/DiaDiem/PageTrash/$1';
$route['admin/dia-diem/thung-rac/khoi-phuc/(:any)'] = 'Admin/DiaDiem/reset/$1';
$route['admin/dia-diem/thung-rac/khoi-phuc'] = 'Admin/DiaDiem/resetAll';
$route['admin/dia-diem/thung-rac/xoa/(:any)'] = 'Admin/DiaDiem/delete/$1';
$route['admin/dia-diem/thung-rac/xoa'] = 'Admin/DiaDiem/deleteAll/$1';

//Customer admin
$route['admin/khach-hang'] = 'Admin/KhachHang/index';
$route['admin/khach-hang/trang/(:any)'] = 'Admin/KhachHang/Page/$1';
$route['admin/khach-hang/xem/(:any)'] = 'Admin/KhachHang/View/$1';
$route['admin/khach-hang/them-thung-rac/(:any)'] = 'Admin/KhachHang/remove/$1';
$route['admin/khach-hang/thung-rac'] = 'Admin/KhachHang/trash';
$route['admin/khach-hang/thung-rac/trang/(:any)'] = 'Admin/KhachHang/PageTrash/$1';
$route['admin/khach-hang/thung-rac/khoi-phuc/(:any)'] = 'Admin/KhachHang/reset/$1';
$route['admin/khach-hang/thung-rac/khoi-phuc'] = 'Admin/KhachHang/resetAll';
$route['admin/khach-hang/thung-rac/xoa/(:any)'] = 'Admin/KhachHang/delete/$1';
$route['admin/khach-hang/thung-rac/xoa'] = 'Admin/KhachHang/deleteAll/$1';
$route['admin/khach-hang/mo-khoa/(:any)'] = 'Admin/KhachHang/unlock/$1';

//Ticket admin
$route['admin/don-hang'] = 'Admin/DonHang/index';
$route['admin/don-hang/trang/(:any)'] = 'Admin/DonHang/Page/$1';
$route['admin/don-hang/xem/(:any)'] = 'Admin/DonHang/View/$1';
$route['admin/don-hang/them-thung-rac/(:any)'] = 'Admin/DonHang/remove/$1';
$route['admin/don-hang/thung-rac'] = 'Admin/DonHang/trash';
$route['admin/don-hang/thung-rac/trang/(:any)'] = 'Admin/DonHang/PageTrash/$1';
$route['admin/don-hang/thung-rac/khoi-phuc/(:any)'] = 'Admin/DonHang/reset/$1';
$route['admin/don-hang/thung-rac/khoi-phuc'] = 'Admin/DonHang/resetAll';
$route['admin/don-hang/thung-rac/xoa/(:any)'] = 'Admin/DonHang/delete/$1';
$route['admin/don-hang/thung-rac/xoa'] = 'Admin/DonHang/deleteAll/$1';
$route['admin/don-hang/hanh-dong/(:any)/(:any)'] = 'Admin/DonHang/action/$1/$2';