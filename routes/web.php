<?php

use App\Http\Controllers\LeadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Core pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Product index
Route::get('/headstones', [PageController::class, 'headstones'])->name('headstones');

// Product pages
Route::get('/headstones/upright-monuments', [PageController::class, 'uprightMonuments'])->name('upright-monuments');
Route::get('/headstones/flat-markers', [PageController::class, 'flatMarkers'])->name('flat-markers');
Route::get('/headstones/slant-markers', [PageController::class, 'slantMarkers'])->name('slant-markers');
Route::get('/headstones/bevel-markers', [PageController::class, 'bevelMarkers'])->name('bevel-markers');
Route::get('/headstones/slant-bevel-markers', [PageController::class, 'slantBevelMarkers'])->name('slant-bevel-markers');
Route::get('/headstones/companion-headstones', [PageController::class, 'companionHeadstones'])->name('companion-headstones');
Route::get('/headstones/lds-pioneer-headstones', [PageController::class, 'ldsPioneerHeadstones'])->name('lds-pioneer-headstones');
Route::get('/headstones/infant-child-memorials', [PageController::class, 'infantChildMemorials'])->name('infant-child-memorials');
Route::get('/headstones/bronze-memorials', [PageController::class, 'bronzeMemorials'])->name('bronze-memorials');
Route::get('/headstones/bench-memorials', [PageController::class, 'benchMemorials'])->name('bench-memorials');
Route::get('/headstones/pet-memorials', [PageController::class, 'petMemorials'])->name('pet-memorials');
Route::get('/headstones/civic-monuments', [PageController::class, 'civicMonuments'])->name('civic-monuments');
Route::get('/headstones/unique-options', [PageController::class, 'uniqueOptions'])->name('unique-options');
Route::get('/headstones/custom-engraving', [PageController::class, 'customEngraving'])->name('custom-engraving');
Route::get('/headstones/restoration', [PageController::class, 'restoration'])->name('restoration');

// Service area index
Route::get('/service-areas', [PageController::class, 'serviceAreas'])->name('service-areas');
// Washington County
Route::get('/service-areas/st-george', [PageController::class, 'stGeorge'])->name('st-george');
Route::get('/service-areas/washington-city', [PageController::class, 'washingtonCityArea'])->name('washington-city-area');
Route::get('/service-areas/hurricane', [PageController::class, 'hurricane'])->name('hurricane');
Route::get('/service-areas/santa-clara', [PageController::class, 'santaClaraArea'])->name('santa-clara-area');
Route::get('/service-areas/ivins', [PageController::class, 'ivins'])->name('ivins');
Route::get('/service-areas/la-verkin', [PageController::class, 'laVerkin'])->name('la-verkin');
Route::get('/service-areas/toquerville', [PageController::class, 'toquervilleArea'])->name('toquerville-area');
Route::get('/service-areas/enterprise', [PageController::class, 'enterpriseArea'])->name('enterprise-area');
// Iron County
Route::get('/service-areas/cedar-city', [PageController::class, 'cedarCity'])->name('cedar-city');
Route::get('/service-areas/enoch', [PageController::class, 'enoch'])->name('enoch');
Route::get('/service-areas/parowan', [PageController::class, 'parowan'])->name('parowan');
Route::get('/service-areas/paragonah', [PageController::class, 'paragonah'])->name('paragonah');
// Kane County
Route::get('/service-areas/kanab', [PageController::class, 'kanab'])->name('kanab');
Route::get('/service-areas/fredonia', [PageController::class, 'fredonia'])->name('fredonia');
Route::get('/service-areas/orderville', [PageController::class, 'ordervilleArea'])->name('orderville-area');
// Beaver County
Route::get('/service-areas/beaver', [PageController::class, 'beaver'])->name('beaver');
Route::get('/service-areas/milford', [PageController::class, 'milford'])->name('milford');
Route::get('/service-areas/minersville', [PageController::class, 'minersville'])->name('minersville');
// Garfield County
Route::get('/service-areas/panguitch', [PageController::class, 'panguitch'])->name('panguitch');
Route::get('/service-areas/tropic', [PageController::class, 'tropic'])->name('tropic');
// Legacy combined route
Route::get('/service-areas/beaver-panguitch', [PageController::class, 'beaverPanguitch'])->name('beaver-panguitch');

// Resource pages
Route::get('/resources', [PageController::class, 'resources'])->name('resources');
Route::get('/resources/buying-guide', [PageController::class, 'buyingGuide'])->name('buying-guide');
Route::get('/resources/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/resources/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/resources/monument-companies-southern-utah', [PageController::class, 'monumentCompaniesSouthernUtah'])->name('monument-companies-southern-utah');

// Cemetery hub + spokes
Route::get('/cemeteries', [PageController::class, 'cemeteries'])->name('cemeteries');
Route::get('/cemeteries/st-george-city-cemetery', [PageController::class, 'stGeorgeCityCemetery'])->name('st-george-city-cemetery');
Route::get('/cemeteries/tonaquint-cemetery', [PageController::class, 'tonaquintCemetery'])->name('tonaquint-cemetery');
Route::get('/cemeteries/washington-city-cemetery', [PageController::class, 'washingtonCityCemetery'])->name('washington-city-cemetery');
Route::get('/cemeteries/hurricane-city-cemetery', [PageController::class, 'hurricaneCityCemetery'])->name('hurricane-city-cemetery');
Route::get('/cemeteries/santa-clara-cemetery', [PageController::class, 'santaClaraCemetery'])->name('santa-clara-cemetery');
Route::get('/cemeteries/ivins-city-cemetery', [PageController::class, 'ivinsCityCemetery'])->name('ivins-city-cemetery');
Route::get('/cemeteries/toquerville-cemetery', [PageController::class, 'toquervilleCemetery'])->name('toquerville-cemetery');
Route::get('/cemeteries/cedar-city-cemetery', [PageController::class, 'cedarCityCemetery'])->name('cedar-city-cemetery');
Route::get('/cemeteries/parowan-city-cemetery', [PageController::class, 'parowanCityCemetery'])->name('parowan-city-cemetery');
Route::get('/cemeteries/kanab-city-cemetery', [PageController::class, 'kanabCityCemetery'])->name('kanab-city-cemetery');
Route::get('/cemeteries/mountain-view-cemetery', [PageController::class, 'mountainViewCemetery'])->name('mountain-view-cemetery');
Route::get('/cemeteries/panguitch-city-cemetery', [PageController::class, 'panguitchCityCemetery'])->name('panguitch-city-cemetery');
// Washington County new pages
Route::get('/cemeteries/enterprise-cemetery', [PageController::class, 'enterpriseCemetery'])->name('enterprise-cemetery');
Route::get('/cemeteries/leeds-cemetery', [PageController::class, 'leedsCemetery'])->name('leeds-cemetery');
Route::get('/cemeteries/gunlock-cemetery', [PageController::class, 'gunlockCemetery'])->name('gunlock-cemetery');
Route::get('/cemeteries/new-harmony-cemetery', [PageController::class, 'newHarmonyCemetery'])->name('new-harmony-cemetery');
Route::get('/cemeteries/central-cemetery', [PageController::class, 'centralCemetery'])->name('central-cemetery');
// Iron County new pages
Route::get('/cemeteries/enoch-city-cemetery', [PageController::class, 'enochCityCemetery'])->name('enoch-city-cemetery');
Route::get('/cemeteries/paragonah-cemetery', [PageController::class, 'paragonahCemetery'])->name('paragonah-cemetery');
Route::get('/cemeteries/kanarraville-cemetery', [PageController::class, 'kanarravilleCemetery'])->name('kanarraville-cemetery');
Route::get('/cemeteries/summit-cemetery', [PageController::class, 'summitCemetery'])->name('summit-cemetery');
// Kane County new pages
Route::get('/cemeteries/fredonia-cemetery', [PageController::class, 'fredoniaCemetery'])->name('fredonia-cemetery');
Route::get('/cemeteries/orderville-cemetery', [PageController::class, 'ordervilleCemetery'])->name('orderville-cemetery');
Route::get('/cemeteries/glendale-cemetery', [PageController::class, 'glendaleCemetery'])->name('glendale-cemetery');
Route::get('/cemeteries/alton-cemetery', [PageController::class, 'altonCemetery'])->name('alton-cemetery');
Route::get('/cemeteries/big-water-cemetery', [PageController::class, 'bigWaterCemetery'])->name('big-water-cemetery');
// Beaver County new pages
Route::get('/cemeteries/milford-cemetery', [PageController::class, 'milfordCemetery'])->name('milford-cemetery');
Route::get('/cemeteries/minersville-cemetery', [PageController::class, 'minersvilleCemetery'])->name('minersville-cemetery');
Route::get('/cemeteries/adamsville-cemetery', [PageController::class, 'adamsvilleCemetery'])->name('adamsville-cemetery');
// Garfield County new pages
Route::get('/cemeteries/escalante-cemetery', [PageController::class, 'escalanteCemetery'])->name('escalante-cemetery');
Route::get('/cemeteries/tropic-city-cemetery', [PageController::class, 'tropicCityCemetery'])->name('tropic-city-cemetery');
Route::get('/cemeteries/boulder-cemetery', [PageController::class, 'boulderCemetery'])->name('boulder-cemetery');
Route::get('/cemeteries/hatch-town-cemetery', [PageController::class, 'hatchTownCemetery'])->name('hatch-town-cemetery');
Route::get('/cemeteries/cannonville-cemetery', [PageController::class, 'cannonvilleCemetery'])->name('cannonville-cemetery');
// Southern Utah National Cemetery (VA, Cedar City)
Route::get('/cemeteries/southern-utah-national-cemetery', [PageController::class, 'southernUtahNationalCemetery'])->name('southern-utah-national-cemetery');
Route::get('/cemeteries/laverkin-city-cemetery', [PageController::class, 'laVerkinCityCemetery'])->name('laverkin-city-cemetery');
Route::get('/cemeteries/virgin-city-cemetery', [PageController::class, 'virginCityCemetery'])->name('virgin-city-cemetery');

// Temple headstone product pages
Route::get('/headstones/st-george-temple-headstones', [PageController::class, 'stGeorgeTempleHeadstones'])->name('st-george-temple-headstones');
Route::get('/headstones/red-cliffs-temple-headstones', [PageController::class, 'redCliffsTempleHeadstones'])->name('red-cliffs-temple-headstones');

// Legal pages
Route::get('/terms-of-service', [PageController::class, 'termsOfService'])->name('terms');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy');

// Lead form submission
Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');

// Auth routes (Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
