<?php
use App\ProductGroup;
use App\Http\Controllers\TestingController;
Route::get('pro/{slug}','ProductGroupController@getGroupProducts');
Route::get('company-categories','Api\CompanyController@getComanyCategories');
Route::get('mainpages/sitemap.xml', 'SitemapController@mainpages');
Route::get('sitemap.xml', 'SitemapController@index');
Route::get('suppliers/a',function (){
return redirect('suppliers');
});
Route::get('suppliers/success','CompanyController@suppliers');
Route::get('category/sitemap.xml', 'SitemapController@category');
Route::get('category/{category}/sitemap.xml', 'SitemapController@categories');
Route::get('events/sitemap.xml', 'SitemapController@events');
Route::get('projects/sitemap.xml', 'SitemapController@projects');
Route::get('tenders/sitemap.xml', 'SitemapController@tenders');
Route::get('articles/sitemap.xml', 'SitemapController@articles');
Route::get('interviews/sitemap.xml', 'SitemapController@interviews');
Route::get('news/sitemap.xml', 'SitemapController@news');
Route::get('pressreleases/sitemap.xml', 'SitemapController@pressreleases');
Route::get('whitepapers/sitemap.xml', 'SitemapController@whitepapers');
Route::get('catalogue/sitemap.xml', 'SitemapController@catalogue');
Route::get('products/sitemap.xml', 'SitemapController@products');
Route::get('suppliers/sitemap.xml', 'SitemapController@suppliers');
Route::get('videos/sitemap.xml','SitemapController@videos');
Route::get('category-suppliers/sitemap.xml', 'SitemapController@categorySuppier');
Route::get('imppro/sitemap.xml', 'SitemapController@imppro');
Route::get('products1/sitemap.xml', 'SitemapController@products1');
Route::get('products2/sitemap.xml', 'SitemapController@products2');
Route::get('suppliers-internal/sitemap.xml', 'SitemapController@suppliersInternal');
Route::get('webinars/sitemap.xml', 'SitemapController@webinar');
Route::get('pat/sitemap.xml', 'SitemapController@pat');
Route::get('pat1/sitemap.xml', 'SitemapController@pat1');
Route::get('pat2/sitemap.xml', 'SitemapController@pat2');
Route::get('pat3/sitemap.xml', 'SitemapController@pat3');
Route::get('pat4/sitemap.xml', 'SitemapController@pat4');
Route::get('pat5/sitemap.xml', 'SitemapController@pat5');
Route::get('pat6/sitemap.xml', 'SitemapController@pat6');
Route::get('pat7/sitemap.xml', 'SitemapController@pat7');
Route::get('pat8/sitemap.xml', 'SitemapController@pat8');
Route::get('pat9/sitemap.xml', 'SitemapController@pat9');
Route::get('pat10/sitemap.xml', 'SitemapController@pat10');
Route::get('pat11/sitemap.xml', 'SitemapController@pat11');
Route::get('pat12/sitemap.xml', 'SitemapController@pat12');
Route::get('pat13/sitemap.xml', 'SitemapController@pat13');
Route::get('pat14/sitemap.xml', 'SitemapController@pat14');
Route::get('pat15/sitemap.xml', 'SitemapController@pat15');
Route::get('pat16/sitemap.xml', 'SitemapController@pat16');
Route::get('pat17/sitemap.xml', 'SitemapController@pat17');
Route::get('pat18/sitemap.xml', 'SitemapController@pat18');
Route::get('search-keywords', 'SearchResultController@keywords');
Route::get('/','HomeController@index')->name('mainhome');
Route::get('projects/archives','ProjectController@archive')->name('project.archives');
Route::get('projects','ProjectController@index');
Route::get('projects/{projecturl}','ProjectController@projectview');
Route::get('articles','IndustryController@article')->name('article');
// Route::post('articles-submit','IndustryController@article')->name('submit-article');
// Route::get('articles/success','IndustryController@article');
Route::get('articles/more/{offset}','IndustryController@more')->name('articles.loadmore');
Route::get('articles/success','IndustryController@article');
Route::get('articles/{articleurl}','IndustryController@articleview')->name('article-view');
Route::get('interviews','IndustryController@interview');
Route::get('interviews/morein/{offset}','IndustryController@moreinterview')->name('interviews.loadmore');
Route::get('interviews/success','IndustryController@interview');
Route::get('interviews/{interviewurl}','IndustryController@interviewview')->name('interview-view');
Route::get('reports','IndustryController@report');
Route::get('reports/{reporturl}','IndustryController@reportview');
Route::get('whitepapers','IndustryController@whitepaper');
Route::get('whitepapers/morewp/{offset}','IndustryController@morewhitepapers')->name('whitepapers.loadmore');
Route::get('whitepapers/success','IndustryController@whitepaper');
Route::get('whitepapers/{whitepaperurl}','IndustryController@whitepaperview')->name('whitepaper-view');
Route::get('news','IndustryController@news');

Route::get('news/abuse-success','IndustryController@news');
Route::get('news/{newsurl}','IndustryController@newsview')->name('news-view');
Route::get('pressreleases','IndustryController@pressrelease');
Route::get('pressreleases/morepr/{offset}','IndustryController@morepressrelease')->name('pressreleases.loadmore');
Route::get('pressreleases/success','IndustryController@pressrelease');
Route::get('pressreleases/abuse-success','IndustryController@pressrelease');
Route::get('pressreleases/{pressreleaseurl}','IndustryController@pressreleaseview')->name('pressrelease-view');
Route::get('categories','CategoryController@index');
Route::get('categories/{url}','CategoryController@catview')->name('category.sub-cat');
//Route::get('categories/{url}','CategoryController@catview');
Route::get('suppliers/{companyurl}/enquiry-success','CompanyController@profile');
Route::get('suppliers','CompanyController@suppliers')->name('suppliers');
// Route::get('suppliers/{string}','CompanyController@suppliersChar');
Route::get('suppliers/{string}/{page}','CompanyController@suppliersFilter');
Route::get('suppliers-filter/{string}','CompanyController@suppliersFilter');
// Route::get('suppliers1',function (){
// 	return view('company.supplier1');
// });
Route::get('featured-suppliers','CompanyController@featuredsuppliers')->name('featured-suppliers');
Route::get('featured-suppliers/{string}/{page}','CompanyController@featuredFilter');
Route::get('suppliers-filter/{string}','CompanyController@featuredFilter');
Route::get('tenders/archives','TenderController@archive')->name('tender.archives');
Route::get('tenders','TenderController@index');
Route::get('tenders/{url}','TenderController@tenderview');
//Route::get('e-newsletters','FormController@register');
Route::get('e-newsletters','FormController@EnewsLetter');
/*CMS Controllers*/
Route::get('aboutus','CmsController@aboutus');
Route::get('terms-conditions','CmsController@terms');
Route::get('sitemap','CmsController@sitemap');
Route::get('clientele','CmsController@clientele');
Route::get('events-newsletters','CmsController@eventsnewsletters');
// Route::get('events-newsletters/success','CmsController@eventsnewsletters');
Route::get('events-newsletters/success','CmsController@eventsnewsletters');
/**/
Route::get('get-listed/saudi-emerging-technologies-forum', 'FormController@getlistSaudi');
Route::post('get-listed/saudi-emerging-technologies-forum', 'FormController@getlistSaudi');
Route::get('get-listed/saudi-emerging-technologies-forum-success','FormController@getlistSaudi')->name('storegetlistsaudi-emerging-technologies-forum.success');
Route::get('get-listed-campaign', 'FormController@getlistedCampaignget');
Route::post('get-listed-campaign', 'FormController@getlistedCampaign');
Route::get('get-listed-campaign-success',function(){
return view('forms.getlisted-campaign-success');
});
Route::get('get-listed-campaign-b', 'FormController@getlistedCampaignBget');
Route::post('get-listed-campaign-b', 'FormController@getlistedCampaignB');
Route::get('get-listed-campaign-b-success',function(){
return view('forms.getlisted-campaign-b-success');
});
Route::get('get-listed/af-2020', 'FormController@getlistSaudi');
Route::post('get-listed/af-2020', 'FormController@getlistSaudi');
Route::get('get-listed/af-2020-success','FormController@getlistSaudi')->name('storegetlistaf-2020.success');
// Route::get('advertise','FormController@advertise');
Route::get('advertise', 'FormController@getlist');
Route::post('advertise/store','FormController@storeadvertise')->name('advertise.store');
Route::get('get-listed1', 'FormController@getlist1');
Route::get('get-listed1/success', 'FormController@getlist1');
Route::post('get-listed1/premium-membership', 'FormController@storegetlist1')->name('getlist1.premium');
Route::post('get-listed1/basic-membership', 'FormController@storegetlist1')->name('getlist1.basic');
/*Route::get('get-listed', 'FormController@getlist');*/
//success url
Route::get('get-listed/{membership}/success', 'FormController@getlist');
/*Route::get('get-listed/success', 'FormController@getlist');*/
Route::post('get-listed/premium-membership', 'FormController@storegetlist')->name('getlist.premium');
Route::post('get-listed/free-membership', 'FormController@storegetlist')->name('getlist.free');
Route::post('get-listed/basic-membership', 'FormController@storegetlist')->name('getlist.basic');
Route::post('basic-membership', 'FormController@storegetlist');
Route::get('partners','PartnerController@index');
Route::get('linkedin-offer','FormController@LinkedInOffer');
/*Forms*/
Route::post('googlecaptha','FormController@checkgooglecaptha')->name("gogglecaptha");
Route::get('/pat/{url}','CompanyController@productKeywordSearch')->name('keyword.search');
Route::get('register','FormController@register');
//success url

Route::get('registration','FormController@registration');
Route::post('events-newsletters-success','FormController@storeregistration')->name('registration.post');
Route::get('registration-success','FormController@registration');

Route::get('post-requirement','FormController@postrequirement');
Route::post('post-requirement-success','FormController@storepostrequirement');
//success url
Route::get('post-requirement/success','FormController@postrequirement');
Route::get('postevent','FormController@postevent');
Route::post('postevent-success','FormController@storepostevent')->name('storepostevent.post');
//success url
Route::get('postevent-success','FormController@postevent');
Route::get('postevent/success','FormController@postevent');
Route::get('mediapack-download','FormController@mediapack');
Route::post('mediapack-download-success','FormController@storemediapack');
//success url
Route::get('mediapack-download-success','FormController@mediapack');
Route::get('newsletter-signup','FormController@newsletter');
Route::post('newsletter-signup-success','FormController@storenewsletter');
Route::post('newsletter-signup-success-ajax','FormController@storenewsletterAjax');
Route::get('event-newsletter-signup','FormController@eventnewsletter');
Route::post('event-newsletter-signup-success','FormController@storeeventnewsletter')->name('submit-eventnewsletter');
Route::get('contactus','FormController@contactus');
Route::post('contactus-success','FormController@storecontactus')->name('contactus.post');
//success url
Route::get('contactus-success','FormController@contactus')->name('contactus.success');
/*End Forms*/
/*Company Profile*/
//Route::get('suppliers','CompanyController@index');
Route::get('suppliers/{companyurl}','CompanyController@profile');
// Route::get('suppliers2/{companyurl}','CompanyController@profile2');
Route::get('products','CategoryController@paidCompanyProducts');
// Route::get('products',function (){
// return redirect('/');
// });
Route::get('products/{companyurl}','CompanyController@product');
Route::get('products/{companyurl}/{producturl}','CompanyController@productview');
Route::get('pressrelease/{companyurl}','CompanyController@pressrelease');
Route::get('catalogue/{companyurl}','CompanyController@catalogue');
Route::get('whitepaper/{companyurl}','CompanyController@whitepaper');
Route::get('video/{companyurl}','CompanyController@video');
Route::get('project/{companyurl}','CompanyController@project');
//India mart form 
Route::get('im/products/{companyurl}','CompanyController@product');
Route::get('im/products/{companyurl}/{producturl}','CompanyController@productview');
//success url
Route::get('products/{companyurl}/enquiry-success','CompanyController@product');
Route::post('company-enquiry','companyEnquiryController@index')->name('company-enquiry.post');
Route::get('products/{companyurl}/{producturl}/enquiry-success','CompanyController@productview')->name('product-enquiry');
Route::get('pressrelease/{companyurl}/enquiry-success','CompanyController@pressrelease');
Route::get('catalogue/{companyurl}/enquiry-success','CompanyController@catalogue');
Route::get('whitepaper/{companyurl}/enquiry-success','CompanyController@whitepaper');
Route::get('video/{companyurl}/enquiry-success','CompanyController@video');
Route::get('catalogue/{companyurl}/enquiry-success','CompanyController@catalogue');
/*Enquiry*/
Route::post('product-enquiry','companyEnquiryController@index');
Route::get('company-askquestion',function(){
return redirect('suppliers');
});
Route::post('company-askquestion','companyEnquiryController@askquestion')->name('askquestion');
Route::post('company-postrequirement','companyEnquiryController@postrequirementCompany')->name('company-postrequirement');
Route::get('company-postrequirement',function(){
return redirect('suppliers');
});
/*End Company Profile*/
/*Events Module */
Route::get('events','EventController@index');
Route::get('events/more/{offset}','EventController@more')->name('events.loadmore');
Route::get('events/register-success','EventController@index');
Route::get('events/news-letter-success','EventController@index');
Route::get('events/post-event-success','EventController@index');
Route::get('/events/archives','EventController@archive')->name('event.archives');
Route::get('events/archives/more/{offset}','EventController@morearchive');
Route::get('/events/archives/success','EventController@archive');
Route::get('/events/archives/signup-success','EventController@archive');
Route::get('events/{eventurl}','EventController@aboutevent');
Route::get('events/{eventurl}/gallery','EventController@gallery');
Route::get('events/{eventurl}/speakers','EventController@speakers');
Route::get('events/{eventurl}/exhibitors','EventController@exhibitors');
Route::get('events/{eventurl}/brochures','EventController@brochure');
Route::get('events/{eventurl}/pressrelease','EventController@pressrelease');
Route::get('events/{eventurl}/partners','EventController@partners');
Route::get('category-country/{category}/{country}','NewSearchController@searchNewCategory')->name('category-country');
/*End Events Module*/
/*Events Organiser Module  */
Route::get('event-organiser/{eventurl}','EventOrgController@aboutevent');
Route::get('event-organiser/{eventurl}/gallery','EventOrgController@gallery');
Route::get('event-organiser/{eventurl}/interviews','EventOrgController@interviews');
Route::get('event-organiser/{eventurl}/articles','EventOrgController@articles');
Route::get('event-organiser/{eventurl}/brochures','EventOrgController@brochure');
Route::get('event-organiser/{eventurl}/pressreleases','EventOrgController@pressrelease');
Route::get('event-organiser/{eventurl}/upcoming-events','EventOrgController@index');
/*Events Organiser Module end Here */
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
// Registration Routes...
Route::get('registers', 'Auth\RegisterController@showRegistrationForm')->name('registers');
Route::post('registers', 'Auth\RegisterController@register');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');/*
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');*/
/*Product Search*/
Route::get('/search-result','SearchResultController@searchResult')->name('new-search');
Route::get('load-products','SearchResultController@productAjaxLoad')->name('load-products');
Route::get('load-pressrelease','SearchResultController@pressreleaseAjaxLoad')->name('load-pressrelease');
Route::get('load-compaines','SearchResultController@companyAjaxLoad')->name('load-compaines');
Route::get('load-articles','SearchResultController@articleAjaxLoad')->name('load-articles');
Route::post('ajax-product-enquiry','SearchResultController@productEnquiry')->name('ajax-product-enquiry');
Route::post('group-product-enquiry','ProductGroupController@groupProductEnquiry')->name('group-product-enquiry');
Route::post('group-product-filter','ProductGroupController@groupProductsFilter')->name('group-product-filter');
Route::get('/search', 'SearchController@index');
Route::post('/search', 'SearchController@homesearch');
Route::get('/api/search', 'SearchController@search');
Route::get('/eventfilter', 'EventController@filter');
Route::get('/tenderfilter', 'TenderController@filter');
Route::get('/projectfilter', 'ProjectController@filter');
Route::get('/eventselectfilter', 'EventController@selectFilter');
Route::get('/eventcategory/{catid}', 'EventController@categoryFilter');
Route::get('eventdatefilter','EventController@monthFilter');
Route::get('eventcountryfilter','EventController@countryFilter');
Route::get('/productcountryfilter', 'ProjectController@countryFilter');
Route::get('/tendercountryfilter', 'TenderController@countryFilter');
/*web-ads*/
/*Route::get('web-ads',function (){
return redirect('/');
});*/
Route::get('web-ads', 'HomeController@ads');
/*Product Search End */
/*categories landing page*/
Route::get('category/{slug}','CategoryController@subcat')->name('category.subcat');
Route::get('rpa-ai','FlatPagesController@index')->name('rap_ai.flatpage');
Route::post('rpa-store','FlatPagesController@RpaStore')->name('rpa.store');
Route::get('download-pdf','FormController@Downloadpdf');
Route::get('download-pdf-texweek','FormController@DownloadpdfTexweek');
// Route::get('{short_urlid}','EventController@geturlinfo');
Route::get('event/texweek-2018','FlatPagesController@TexWeek')->name('texweek.flatpage');
Route::post('event/texweek-store','FlatPagesController@TexweekStore')->name('texweek.store');
Route::post('event/texweek-success','FlatPagesController@TexweekStore')->name('texweek.success');
//Route::get('linkedin-offer', 'FormController@LinkedInOffer');
Route::post('repostabuse','IndustryController@reportAbuse');
Route::post('pressrepostabuse','IndustryController@pressreportAbuse');
Route::post('news/success','NewIndustryController@submitNews')->name('submit-news');
Route::post('articles/success','NewIndustryController@submitArticles')->name('submit-articles');
Route::post('interviews/success','NewIndustryController@submitInterviews')->name('submit-interviews');
Route::post('pressreleases/success','NewIndustryController@submitPressreleases')->name('submit-pressreleases');
Route::post('whitepapers/success','NewIndustryController@submitWhitepapers')->name('submit-whitepapers');
Route::post('publishpressrelease','IndustryController@publishPressrelease');
Route::get('404-page', function () {

 return view("errors.404");
})->name('404-page');
/*Route::get('pex-business-transformation', function(){
return View::make("flatpages.pex-business");
});*/
Route::get('pex-business-transformation','FlatPagesController@pexbusinessview');
Route::get('pex-business-transformation-success', 'FlatPagesController@pexbusinessview');
// Route::get('pex-business-transformation-success','FlatPagesController@pexbusinessview');
Route::post('pex-transformation-form','FlatPagesController@pexbusiness')->name('pex-transformation-form');
Route::get('imppro/{url}','FlatPagesController@landingPageProducts');
Route::get('download-pdf-pex','FlatPagesController@Downloadpdfpex');
Route::get('coopercorp-industrial-power-generators','FlatPagesController@coopercorpIndustrialGet');
Route::post('coopercorp-industrial-power-generators','FlatPagesController@coopercorpIndustrial');
//success Url
Route::get('coopercorp-industrial-power-generators/success','FlatPagesController@coopercorpIndustrialGet');
Route::get('searchajax','AutoCompleteController@autoComplete')->name('searchajax');
Route::get('get-listed2', 'FormController@getlist2');
Route::post('get-listed2/premium-membership', 'FormController@storegetlist2')->name('getlist2.premium');
Route::post('get-listed2/basic-membership', 'FormController@storegetlist2')->name('getlist2.basic');
/*scwsamericas Landing page*/
Route::get('scwsamericas-enterprises-event-2018','FlatPagesController@ScwsamericasStore');
Route::post('scwsamericas-enterprises-event-2018-success','FlatPagesController@ScwsamericasStore')->name('scwsamericas.success');
Route::get('scwsamericas-enterprises-event-2018-success','FlatPagesController@ScwsamericasStore')->name('scwsamericas');
/*scwsamericas Landing page End*/
Route::get('eventajaxmore/{offset}','HomeController@more');
Route::get('/companyajaxmore/{offset}','FlatPagesController@more');
Route::get('list-eventnewsletter','CmsController@archive');
Route::get('list-newsletter','CmsController@enewsarchive');
Route::get('list-emailblast','CmsController@eblastarchive');
Route::get('productlaunch','IndustryController@productlaunch');
Route::get('productlaunch/{url}','IndustryController@productlaunchview')->name('productlaunchview');
Route::get('get-listed', 'FormController@getlistnew');
Route::post('dail-code','FormController@countryDailCode')->name('dail-code');
Route::post('get-listed-new-success', 'FormController@newgetliststore')->name('getlisted.post');
Route::get('get-listed-manufacturer-success', 'FormController@getlistnew')->name('getlistedmnf.success');
Route::get('get-listed-distributor-success', 'FormController@getlistnew')->name('getlisteddist.success');
Route::get('get-listed-buyer-success', 'FormController@getlistnew')->name('getlistedbuy.success');
/*category  tags*/
Route::get('tag/{subtag}','CategoryController@subtag');
Route::get('webinar-demo/suez-sievers-webinar','WebinarController@suezSievers');
Route::get('webinar-demo/suez-ozonia-ozone-systems-webinar','WebinarController@suezOzonia');
Route::get('cmp-mediapack', 'FormController@cmpMediapack')->name('cmpmediapack');
Route::post('cmp-mediapack-success', 'FormController@cmpMediapack')->name('cmpmediapack.post');
Route::get('cmp-mediapack-success', 'FormController@cmpMediapack')->name('cmpmediapack.success');
Route::post('profileclaim','FormController@profileclaim')->name('profileclaim');
Route::get('suppliers/{companyurl}/interested','CompanyController@profile');
Route::get('suppliers/{companyurl}/not-interested','CompanyController@profile');
Route::get('suppliers/{companyurl}/need-more-details','CompanyController@profile');
Route::get('testsupplliers/profile-claim/success','DemocompanyController@profile');
//webinars
Route::get('webinars','WebinarController@index')->name('webinars');
//End webinars
Route::get('pall-waters-defense-webinar','WebinarController@pallwatersDefense');
Route::post('pall-waters-defense-webinar-success','WebinarController@pallwatersDefense')->name('pallwatersdefense.post');
Route::get('pall-waters-defense-webinar-success','WebinarController@pallwatersDefense')->name('pallwatersdefense.success');
//Webinar Ondemand
Route::get('5g-webinar','WebinarController@driving');
Route::post('5g-webinar-success','WebinarController@driving')->name('5gwebinar.post');
Route::get('5g-webinar-success','WebinarController@driving')->name('5gwebinar.success');
Route::get('sorbotics-webinar','WebinarController@productionizing');
Route::post('sorbotics-webinar-success','WebinarController@productionizing')->name('sorbotics.post');
Route::get('sorbotics-webinar-success','WebinarController@productionizing')->name('sorbotics.success');
Route::get('ups-webinar','WebinarController@ups');
Route::post('ups-webinar-success','WebinarController@ups')->name('ups.post');
Route::get('ups-webinar-success','WebinarController@ups')->name('ups.success');
Route::get('yokogawa-webinar','WebinarController@yokogawa');
Route::post('yokogawa-webinar-success','WebinarController@yokogawa')->name('yokogawa.post');
Route::get('yokogawa-webinar-success','WebinarController@yokogawa')->name('yokogawa.success');
Route::get('mtdg-webinar','WebinarController@mtdg');
Route::post('mtdg-webinar-success','WebinarController@mtdg')->name('mtdg.post');
Route::get('mtdg-webinar-success','WebinarController@mtdg')->name('mtdg.success');
Route::get('joachim-webinar','WebinarController@joachim');
Route::post('joachim-webinar-success','WebinarController@joachim')->name('joachim.post');
Route::get('joachim-webinar-success','WebinarController@joachim')->name('joachim.success');
Route::get('infogain-webinar','WebinarController@infogain');
Route::post('infogain-webinar-success','WebinarController@infogain')->name('infogain.post');
Route::get('infogain-webinar-success','WebinarController@infogain')->name('infogain.success');
Route::get('orange-webinar','WebinarController@orange');
Route::post('orange-webinar-success','WebinarController@orange')->name('orange.post');
Route::get('orange-webinar-success','WebinarController@orange')->name('orange.success');
//our-services
Route::get('our-services','FlatPagesController@ourServices')->name('ourServices');
Route::post('our-services-success','FlatPagesController@ourServices')->name('ourServices.post');
Route::get('our-services-success','FlatPagesController@ourServices')->name('ourServices.success');


Route::get('b2b-marketing-services','FlatPagesController@b2bmarketingservices');
Route::post('b2b-marketing-services-success','FlatPagesController@b2bmarketingservices')->name('b2bmarketingservices.post');
Route::get('b2b-marketing-services-success','FlatPagesController@b2bmarketingservices')->name('b2bmarketingservices.success');

// promotion routes start

Route::prefix('promotion')->group(function () {

Route::get('sparkplug-open-specification-critical-achieving-roi-in-iiot','FlatPagesController@sparkplugopenSpecificationcriticalachieving');
Route::post('sparkplug-open-specification-critical-achieving-roi-in-iiot-success','FlatPagesController@sparkplugopenSpecificationcriticalachieving')->name('sparkplugopenSpecificationcriticalachieving.post');
Route::get('sparkplug-open-specification-critical-achieving-roi-in-iiot-success','FlatPagesController@sparkplugopenSpecificationcriticalachieving')->name('sparkplugopenSpecificationcriticalachieving.success');
   
Route::get('optimizing-production-scheduling-execution','FlatPagesController@optimizingProductionSchedulingExecution');
Route::post('optimizing-production-scheduling-execution-success','FlatPagesController@optimizingProductionSchedulingExecution')->name('optimizingProductionSchedulingExecution.post');
Route::get('optimizing-production-scheduling-execution-success','FlatPagesController@optimizingProductionSchedulingExecution')->name('optimizingProductionSchedulingExecution.success');
  
Route::get('automa-net-e-blast','FlatPagesController@automanetEBlast');
Route::post('automa-net-e-blast-success','FlatPagesController@automanetEBlast')->name('automanetEBlast.post');
Route::get('automa-net-e-blast-success','FlatPagesController@automanetEBlast')->name('automanetEBlast.success');
 
Route::get('kelvin-ai-july-23','FlatPagesController@kelvinaijuly23');
Route::post('kelvin-ai-july-23-success','FlatPagesController@kelvinaijuly23')->name('kelvinaijuly23.post');
Route::get('kelvin-ai-july-23-success','FlatPagesController@kelvinaijuly23')->name('kelvinaijuly23.success');

Route::get('energytech-media-kit','FlatPagesController@energytechmediakit');
Route::post('energytech-media-kit-success','FlatPagesController@energytechmediakit')->name('energytechmediakit.post');
Route::get('energytech-media-kit-success','FlatPagesController@energytechmediakit')->name('energytechmediakit.success');
// webinars 
Route::get('kelvin-inc-future-of-digital-pat','WebinarController@KelvinIncFutureOfDigitalPAT');

});