<?php
use Illuminate\Support\Facades\Lang;
Breadcrumbs::register ( 'home', function ($breadcrumbs) {
	$breadcrumbs->push ( Lang::get ( 'properties.home' ), route ( 'admin.root' ) );
} );
// User
Breadcrumbs::register ( 'userList', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'home' );
	$breadcrumbs->push ( Lang::get ( 'properties.adminuser.management' ), route ( 'admin.adminuser.index' ) );
} );
Breadcrumbs::register ( 'userCreate', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'userList' );
	$breadcrumbs->push ( Lang::get ( 'properties.adminuser.form.create_title' ), route ( 'admin.adminuser.index' ) );
} );
Breadcrumbs::register ( 'userEdit', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'userList' );
	$breadcrumbs->push ( Lang::get ( 'properties.adminuser.form.update_title' ), route ( 'admin.adminuser.index' ) );
} );

// site User
Breadcrumbs::register ( 'siteuserList', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'home' );
	$breadcrumbs->push ( Lang::get ( 'properties.user.management' ), route ( 'admin.user.index' ) );
} );
Breadcrumbs::register ( 'siteuserCreate', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'userList' );
	$breadcrumbs->push ( Lang::get ( 'properties.user.form.create_title' ), route ( 'admin.user.index' ) );
} );
Breadcrumbs::register ( 'siteuserEdit', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'userList' );
	$breadcrumbs->push ( Lang::get ( 'properties.user.form.update_title' ), route ( 'admin.user.index' ) );
} );

// Industries
Breadcrumbs::register ( 'industriesEdit', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'industriesList' );
	$breadcrumbs->push ( Lang::get ( 'properties.industries.title' ), route ( 'admin.industry.index' ) );
} );
Breadcrumbs::register ( 'industriesList', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'home' );
	$breadcrumbs->push ( Lang::get ( 'properties.industries.title' ), route ( 'admin.industry.index' ) );
} );
Breadcrumbs::register ( 'industriesCreate', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'industriesList' );
	$breadcrumbs->push ( Lang::get ( 'properties.industries.create.title' ), route ( 'admin.industry.index' ) );
} );

// roles
Breadcrumbs::register ( 'RoleList', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'userList' );
	$breadcrumbs->push ( Lang::get ( 'properties.role.management' ), route ( 'admin.role.index' ) );
} );
Breadcrumbs::register ( 'roleCreate', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'RoleList' );
	$breadcrumbs->push ( Lang::get ( 'properties.role.form.create_title' ), route ( 'admin.role.create' ) );
} );
Breadcrumbs::register ( 'roleEdit', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'RoleList' );
	$breadcrumbs->push ( Lang::get ( 'properties.role.form.edit_title' ), route ( 'admin.role.create' ) );
} );
// Company Type
Breadcrumbs::register ( 'CompanyTypeList', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'home' );
	$breadcrumbs->push ( Lang::get ( 'properties.companytype.management' ), route ( 'admin.companytype.index' ) );
} );
Breadcrumbs::register ( 'CompanyTypeCreate', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'CompanyTypeList' );
	$breadcrumbs->push ( Lang::get ( 'properties.companytypes.createNew' ), route ( 'admin.companytype.create' ) );
} );
Breadcrumbs::register ( 'CompanyTypeEdit', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'CompanyTypeList' );
	$breadcrumbs->push ( Lang::get ( 'properties.companytype.form.edit_title' ), route ( 'admin.companytype.create' ) );
} );
// FAQ
Breadcrumbs::register ( 'FaqList', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'home' );
	$breadcrumbs->push ( Lang::get ( 'properties.faq.management' ), route ( 'admin.faq.index' ) );
} );
Breadcrumbs::register ( 'FaqCreate', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'FaqList' );
	$breadcrumbs->push ( Lang::get ( 'properties.faqs.createNew' ), route ( 'admin.faq.create' ) );
} );
Breadcrumbs::register ( 'FaqEdit', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'FaqList' );
	$breadcrumbs->push ( Lang::get ( 'properties.faq.form.edit_title' ), route ( 'admin.faq.create' ) );
} );

// Static Content
Breadcrumbs::register ( 'StaticContentList', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'home' );
	$breadcrumbs->push ( Lang::get ( 'properties.staticcontent.management' ), route ( 'admin.staticcontent.index' ) );
} );
Breadcrumbs::register ( 'StaticContentCreate', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'StaticContentList' );
	$breadcrumbs->push ( Lang::get ( 'properties.staticcontents.createNew' ), route ( 'admin.staticcontent.create' ) );
} );
Breadcrumbs::register ( 'StaticContentEdit', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'StaticContentList' );
	$breadcrumbs->push ( Lang::get ( 'properties.staticcontents.update' ), route ( 'admin.staticcontent.create' ) );
} );

// Companies
Breadcrumbs::register ( 'CompanyList', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'home' );
	$breadcrumbs->push ( Lang::get ( 'properties.company.management' ), route ( 'admin.company.index' ) );
} );
Breadcrumbs::register ( 'CompanyCreate', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'CompanyList' );
	$breadcrumbs->push ( Lang::get ( 'properties.companys.createNew' ), route ( 'admin.company.create' ) );
} );
Breadcrumbs::register ( 'CompanyEdit', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'CompanyList' );
	$breadcrumbs->push ( Lang::get ( 'properties.company.form.edit_title' ), route ( 'admin.company.create' ) );
} );
// provinces
Breadcrumbs::register ( 'ProvinceList', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'home' );
	$breadcrumbs->push ( Lang::get ( "properties.province.management.title" ), route ( 'admin.province.index' ) );
} );
Breadcrumbs::register ( 'ProvinceCreate', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'ProvinceList' );
	$breadcrumbs->push ( Lang::get ( "properties.province.create.title" ), route ( 'admin.province.create' ) );
} );
Breadcrumbs::register ( 'ProvinceEdit', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'ProvinceList' );
	$breadcrumbs->push ( Lang::get ( "properties.province.update.title" ), route ( 'admin.province.create' ) );
} );
// position
Breadcrumbs::register ( 'PositionList', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'home' );
	$breadcrumbs->push ( Lang::get ( "properties.position.management.title" ), route ( 'admin.position.index' ) );
} );
Breadcrumbs::register ( 'PositionCreate', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'PositionList' );
	$breadcrumbs->push ( Lang::get ( "properties.position.create.title" ), route ( 'admin.position.create' ) );
} );
Breadcrumbs::register ( 'PositionEdit', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'PositionList' );
	$breadcrumbs->push ( Lang::get ( "properties.position.update.title" ), route ( 'admin.position.create' ) );
} );
// setting
Breadcrumbs::register ( 'SettingList', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'home' );
	$breadcrumbs->push ( Lang::get ( "properties.setting.management.title" ), route ( 'admin.setting.index' ) );
} );
Breadcrumbs::register ( 'SettingCreate', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'SettingList' );
	$breadcrumbs->push ( Lang::get ( "properties.setting.form.create" ), route ( 'admin.setting.create' ) );
} );
Breadcrumbs::register ( 'SettingEdit', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'SettingList' );
	$breadcrumbs->push ( Lang::get ( "properties.setting.form.create" ), route ( 'admin.setting.create' ) );
} );
// news
Breadcrumbs::register ( 'NewList', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'home' );
	$breadcrumbs->push ( Lang::get ( "properties.new.management.title" ), route ( 'admin.new.index' ) );
} );
Breadcrumbs::register ( 'NewCreate', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'NewList' );
	$breadcrumbs->push ( Lang::get ( "properties.new.create.title" ), route ( 'admin.new.create' ) );
} );
Breadcrumbs::register ( 'NewEdit', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'NewList' );
	$breadcrumbs->push ( Lang::get ( "properties.new.update.create" ), route ( 'admin.new.create' ) );
} );
// comment category
Breadcrumbs::register ( 'CommentCategoryList', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'home' );
	$breadcrumbs->push ( Lang::get ( "properties.commentcategory.management.title" ), route ( 'admin.commentcategory.index' ) );
} );
Breadcrumbs::register ( 'CommentCategoryCreate', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'CommentCategoryList' );
	$breadcrumbs->push ( Lang::get ( "properties.commentcategory.create" ), route ( 'admin.commentcategory.create' ) );
} );
Breadcrumbs::register ( 'CommentCategoryEdit', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'CommentCategoryList' );
	$breadcrumbs->push ( Lang::get ( "properties.commentcategory.edit" ), route ( 'admin.commentcategory.create' ) );
} );
// comment category properties
Breadcrumbs::register ( 'CommentSubcategoryList', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'home' );
	$breadcrumbs->push ( Lang::get ( "properties.commentsubcategory.management.title" ), route ( 'admin.commentsubcategory.index' ) );
} );
Breadcrumbs::register ( 'CommentSubcategoryCreate', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'CommentSubcategoryList' );
	$breadcrumbs->push ( Lang::get ( "properties.commentsubcategory.create.title" ), route ( 'admin.commentsubcategory.create' ) );
} );
Breadcrumbs::register ( 'CommentSubcategoryEdit', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'CommentSubcategoryList' );
	$breadcrumbs->push ( Lang::get ( "properties.commentsubcategory.edit" ), route ( 'admin.commentsubcategory.create' ) );
} );
// occupation
Breadcrumbs::register ( 'OccupationList', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'home' );
	$breadcrumbs->push ( Lang::get ( "properties.occupation.management.title" ), route ( 'admin.occupation.index' ) );
} );
Breadcrumbs::register ( 'OccupationCreate', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'OccupationList' );
	$breadcrumbs->push ( Lang::get ( "properties.occupation.create.title" ), route ( 'admin.occupation.create' ) );
} );
Breadcrumbs::register ( 'OccupationEdit', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'OccupationList' );
	$breadcrumbs->push ( Lang::get ( "properties.occupation.edit.title" ), route ( 'admin.occupation.create' ) );
} );

// client
Breadcrumbs::register ( 'clientHome', function ($breadcrumbs) {
	$breadcrumbs->push ( Lang::get ( 'properties.home' ), route ( 'client.home' ) );
} );
Breadcrumbs::register ( 'registerInput', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'clientHome' );
	$breadcrumbs->push ( Lang::get ( 'properties.home.top.register.title' ), route ( 'register.input' ) );
} );
Breadcrumbs::register ( 'registerConfirm', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'registerInput' );
	$breadcrumbs->push ( Lang::get ( 'properties.register.confirm' ), route ( 'register.confirm' ) );
} );
Breadcrumbs::register ( 'registerFinish', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'registerConfirm' );
	$breadcrumbs->push ( Lang::get ( 'properties.contact.finish' ), route ( 'register.finish' ) );
} );
Breadcrumbs::register ( 'changeInfor', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'clientHome' );
	$breadcrumbs->push ( Lang::get ( 'properties.member.editInfor.title' ), route ( 'user.changeInfor' ) );
} );
Breadcrumbs::register ( 'changeEmail', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'changeInfor' );
	$breadcrumbs->push ( Lang::get ( 'properties.changeEmail.title' ), route ( 'user.changeEmail' ) );
} );
Breadcrumbs::register ( 'changeEmailFinish', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'clientHome' );
	$breadcrumbs->push ( Lang::get ( 'properties.contact.finish' ), route ( 'changeEmail.finish' ) );
} );
Breadcrumbs::register ( 'companyFavorite', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'clientHome' );
	$breadcrumbs->push ( Lang::get ( 'properties.companies.favorite' ), route ( 'company.favorite' ) );
} );
Breadcrumbs::register ( 'companyViewHistory', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'clientHome' );
	$breadcrumbs->push ( Lang::get ( 'properties.home.company.recently.viewed' ), route ( 'company.viewHistory' ) );
} );
Breadcrumbs::register ( 'companySearch', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'clientHome' );
	$breadcrumbs->push ( Lang::get ( 'properties.form.search.title' ), route ( 'company.search' ) );
} );
Breadcrumbs::register ( 'login', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'clientHome' );
	$breadcrumbs->push ( Lang::get ( 'properties.home.top.login.title' ), route ( 'login.input' ) );
} );
Breadcrumbs::register ( 'aboutus', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'clientHome' );
	$breadcrumbs->push ( Lang::get ( 'properties.home.about.us' ), route ( 'static' ) );
} );
Breadcrumbs::register ( 'term', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'clientHome' );
	$breadcrumbs->push ( Lang::get ( 'properties.home.teams.of_use' ), route ( 'static' ) );
} );
Breadcrumbs::register ( 'privacy', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'clientHome' );
	$breadcrumbs->push ( Lang::get ( 'properties.home.privacy.statement' ), route ( 'static' ) );
} );
Breadcrumbs::register ( 'contactInput', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'clientHome' );
	$breadcrumbs->push ( Lang::get ( 'properties.contact.input' ), route ( 'contact.input' ) );
} );
Breadcrumbs::register ( 'contactConfirm', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'contactInput' );
	$breadcrumbs->push ( Lang::get ( 'properties.contact.confirm' ), route ( 'contact.confirm' ) );
} );
Breadcrumbs::register ( 'contactFinish', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'contactInput' );
	$breadcrumbs->push ( Lang::get ( 'properties.contact.finish' ), route ( 'contact.finish' ) );
} );
Breadcrumbs::register ( 'Faq', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'clientHome' );
	$breadcrumbs->push ( Lang::get ( 'properties.home.faq' ), route ( 'contact.finish' ) );
} );
Breadcrumbs::register ( 'commentInput', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'clientHome' );
	$breadcrumbs->push ( Lang::get ( 'properties.comment.input.title' ), route ( 'comment.input' ) );
} );
Breadcrumbs::register ( 'commentConfirm', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'commentInput' );
	$breadcrumbs->push ( Lang::get ( 'properties.comment.confirm.title' ), route ( 'comment.confirm' ) );
} );
Breadcrumbs::register ( 'commentFinish', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'clientHome' );
	$breadcrumbs->push ( Lang::get ( 'properties.comment.finish.title' ), route ( 'comment.finish' ) );
} );
Breadcrumbs::register ( 'changeEmailFinish', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'clientHome' );
	$breadcrumbs->push ( Lang::get ( 'properties.contact.finish' ), route ( 'changeEmail.finish' ) );
} );
Breadcrumbs::register ( 'changePass', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'changeInfor' );
	$breadcrumbs->push ( Lang::get ( 'properties.changePass.form.title' ), route ( 'user.changepass' ) );
} );
Breadcrumbs::register ( 'changePassFinish', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'changePass' );
	$breadcrumbs->push ( Lang::get ( 'properties.contact.finish' ), route ( 'user.changepass.finish' ) );
} );
// editInfor
Breadcrumbs::register ( 'editInfor', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'changeInfor' );
	$breadcrumbs->push ( Lang::get ( 'properties.changeInfor.title' ), route ( 'editInfor.input' ) );
} );
Breadcrumbs::register ( 'editInforFinish', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'editInfor' );
	$breadcrumbs->push ( Lang::get ( 'properties.contact.finish' ), route ( 'editInfor.finish' ) );
} );
// retrieval pass
Breadcrumbs::register ( 'retryPass', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'clientHome' );
	$breadcrumbs->push ( Lang::get ( 'properties.retrievalPass.input.title' ), route ( 'retryPass.input' ) );
} );
Breadcrumbs::register ( 'retryPassFinish', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'retryPass' );
	$breadcrumbs->push ( Lang::get ( 'properties.contact.finish' ), route ( 'retryPass.submit' ) );
} );
// company detail
Breadcrumbs::register ( 'companyDetail', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'clientHome' );
	$breadcrumbs->push ( Lang::get ( 'properties.detailcompany.title' ), route ( 'Companydetail' ) );
} );
Breadcrumbs::register ( 'commentTabFinish', function ($breadcrumbs) {
	$breadcrumbs->parent ( 'clientHome' );
	$breadcrumbs->push ( Lang::get ( 'properties.commnetTab.finish' ), route ( 'notification.success' ) );
} );
    