<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class PageController extends Controller
{
    // Core pages
    public function home(): Response
    {
        return Inertia::render('Home');
    }

    public function about(): Response
    {
        return Inertia::render('About');
    }

    public function gallery(): Response
    {
        return Inertia::render('Gallery');
    }

    public function contact(): Response
    {
        return Inertia::render('Contact');
    }

    // Product index
    public function headstones(): Response
    {
        return Inertia::render('Products/Index');
    }

    // Product pages
    public function uprightMonuments(): Response
    {
        return Inertia::render('Products/UprightMonuments');
    }

    public function flatMarkers(): Response
    {
        return Inertia::render('Products/FlatMarkers');
    }

    public function slantMarkers(): Response
    {
        return Inertia::render('Products/SlantMarkers');
    }

    public function bevelMarkers(): Response
    {
        return Inertia::render('Products/BevelMarkers');
    }

    public function slantBevelMarkers(): Response
    {
        return Inertia::render('Products/SlantBevelMarkers');
    }

    public function companionHeadstones(): Response
    {
        return Inertia::render('Products/CompanionHeadstones');
    }

    public function ldsPioneerHeadstones(): Response
    {
        return Inertia::render('Products/LdsPioneerHeadstones');
    }

    public function infantChildMemorials(): Response
    {
        return Inertia::render('Products/InfantChildMemorials');
    }

    public function bronzeMemorials(): Response
    {
        return Inertia::render('Products/BronzeMemorials');
    }

    public function benchMemorials(): Response
    {
        return Inertia::render('Products/BenchMemorials');
    }

    public function petMemorials(): Response
    {
        return Inertia::render('Products/PetMemorials');
    }

    public function civicMonuments(): Response
    {
        return Inertia::render('Products/CivicMonuments');
    }

    public function uniqueOptions(): Response
    {
        return Inertia::render('Products/UniqueOptions');
    }

    public function customEngraving(): Response
    {
        return Inertia::render('Products/CustomEngraving');
    }

    public function restoration(): Response
    {
        return Inertia::render('Products/Restoration');
    }

    // Service area pages
    public function serviceAreas(): Response
    {
        return Inertia::render('ServiceAreas/Index');
    }

    public function stGeorge(): Response
    {
        return Inertia::render('ServiceAreas/StGeorge');
    }

    public function washingtonCityArea(): Response
    {
        return Inertia::render('ServiceAreas/WashingtonCity');
    }

    public function hurricane(): Response
    {
        return Inertia::render('ServiceAreas/Hurricane');
    }

    public function santaClaraArea(): Response
    {
        return Inertia::render('ServiceAreas/SantaClara');
    }

    public function ivins(): Response
    {
        return Inertia::render('ServiceAreas/Ivins');
    }

    public function laVerkin(): Response
    {
        return Inertia::render('ServiceAreas/LaVerkin');
    }

    public function toquervilleArea(): Response
    {
        return Inertia::render('ServiceAreas/Toquerville');
    }

    public function enterpriseArea(): Response
    {
        return Inertia::render('ServiceAreas/Enterprise');
    }

    public function cedarCity(): Response
    {
        return Inertia::render('ServiceAreas/CedarCity');
    }

    public function enoch(): Response
    {
        return Inertia::render('ServiceAreas/Enoch');
    }

    public function parowan(): Response
    {
        return Inertia::render('ServiceAreas/Parowan');
    }

    public function paragonah(): Response
    {
        return Inertia::render('ServiceAreas/Paragonah');
    }

    public function kanab(): Response
    {
        return Inertia::render('ServiceAreas/Kanab');
    }

    public function fredonia(): Response
    {
        return Inertia::render('ServiceAreas/Fredonia');
    }

    public function ordervilleArea(): Response
    {
        return Inertia::render('ServiceAreas/Orderville');
    }

    public function beaver(): Response
    {
        return Inertia::render('ServiceAreas/Beaver');
    }

    public function milford(): Response
    {
        return Inertia::render('ServiceAreas/Milford');
    }

    public function minersville(): Response
    {
        return Inertia::render('ServiceAreas/Minersville');
    }

    public function panguitch(): Response
    {
        return Inertia::render('ServiceAreas/Panguitch');
    }

    public function tropic(): Response
    {
        return Inertia::render('ServiceAreas/Tropic');
    }

    public function beaverPanguitch(): Response
    {
        return Inertia::render('ServiceAreas/BeaverPanguitch');
    }

    // Resource pages
    public function resources(): Response
    {
        return Inertia::render('Resources/Index');
    }

    public function buyingGuide(): Response
    {
        return Inertia::render('Resources/BuyingGuide');
    }

    public function pricing(): Response
    {
        return Inertia::render('Resources/Pricing');
    }

    public function faq(): Response
    {
        return Inertia::render('Resources/Faq');
    }

    public function monumentCompaniesSouthernUtah(): Response
    {
        return Inertia::render('Resources/MonumentCompanies');
    }

    // Cemetery hub + spokes
    public function cemeteries(): Response
    {
        return Inertia::render('Cemeteries/Index');
    }

    public function stGeorgeCityCemetery(): Response
    {
        return Inertia::render('Cemeteries/StGeorgeCityCemetery');
    }

    public function tonaquintCemetery(): Response
    {
        return Inertia::render('Cemeteries/TonaquintCemetery');
    }

    public function washingtonCityCemetery(): Response
    {
        return Inertia::render('Cemeteries/WashingtonCityCemetery');
    }

    public function hurricaneCityCemetery(): Response
    {
        return Inertia::render('Cemeteries/HurricaneCityCemetery');
    }

    public function santaClaraCemetery(): Response
    {
        return Inertia::render('Cemeteries/SantaClaraCemetery');
    }

    public function ivinsCityCemetery(): Response
    {
        return Inertia::render('Cemeteries/IvinsCityCemetery');
    }

    public function toquervilleCemetery(): Response
    {
        return Inertia::render('Cemeteries/ToquervilleCemetery');
    }

    public function cedarCityCemetery(): Response
    {
        return Inertia::render('Cemeteries/CedarCityCemetery');
    }

    public function parowanCityCemetery(): Response
    {
        return Inertia::render('Cemeteries/ParowanCityCemetery');
    }

    public function kanabCityCemetery(): Response
    {
        return Inertia::render('Cemeteries/KanabCityCemetery');
    }

    public function mountainViewCemetery(): Response
    {
        return Inertia::render('Cemeteries/MountainViewCemetery');
    }

    public function panguitchCityCemetery(): Response
    {
        return Inertia::render('Cemeteries/PanguitchCityCemetery');
    }

    public function enterpriseCemetery(): Response
    {
        return Inertia::render('Cemeteries/EnterpriseCemetery');
    }

    public function leedsCemetery(): Response
    {
        return Inertia::render('Cemeteries/LeedsCemetery');
    }

    public function gunlockCemetery(): Response
    {
        return Inertia::render('Cemeteries/GunlockCemetery');
    }

    public function newHarmonyCemetery(): Response
    {
        return Inertia::render('Cemeteries/NewHarmonyCemetery');
    }

    public function centralCemetery(): Response
    {
        return Inertia::render('Cemeteries/CentralCemetery');
    }

    public function enochCityCemetery(): Response
    {
        return Inertia::render('Cemeteries/EnochCityCemetery');
    }

    public function paragonahCemetery(): Response
    {
        return Inertia::render('Cemeteries/ParagonahCemetery');
    }

    public function kanarravilleCemetery(): Response
    {
        return Inertia::render('Cemeteries/KanarravilleCemetery');
    }

    public function summitCemetery(): Response
    {
        return Inertia::render('Cemeteries/SummitCemetery');
    }

    public function fredoniaCemetery(): Response
    {
        return Inertia::render('Cemeteries/FredoniacCemetery');
    }

    public function ordervilleCemetery(): Response
    {
        return Inertia::render('Cemeteries/OrdervilleCemetery');
    }

    public function glendaleCemetery(): Response
    {
        return Inertia::render('Cemeteries/GlendaleCemetery');
    }

    public function altonCemetery(): Response
    {
        return Inertia::render('Cemeteries/AltonCemetery');
    }

    public function bigWaterCemetery(): Response
    {
        return Inertia::render('Cemeteries/BigWaterCemetery');
    }

    public function milfordCemetery(): Response
    {
        return Inertia::render('Cemeteries/MilfordCemetery');
    }

    public function minersvilleCemetery(): Response
    {
        return Inertia::render('Cemeteries/MinersvilleCemetery');
    }

    public function adamsvilleCemetery(): Response
    {
        return Inertia::render('Cemeteries/AdamsvilleCemetery');
    }

    public function escalanteCemetery(): Response
    {
        return Inertia::render('Cemeteries/EscalanteCemetery');
    }

    public function tropicCityCemetery(): Response
    {
        return Inertia::render('Cemeteries/TropicCityCemetery');
    }

    public function boulderCemetery(): Response
    {
        return Inertia::render('Cemeteries/BoulderCemetery');
    }

    public function hatchTownCemetery(): Response
    {
        return Inertia::render('Cemeteries/HatchTownCemetery');
    }

    public function cannonvilleCemetery(): Response
    {
        return Inertia::render('Cemeteries/CannonvilleCemetery');
    }

    public function southernUtahNationalCemetery(): Response
    {
        return Inertia::render('Cemeteries/SouthernUtahNationalCemetery');
    }

    public function laVerkinCityCemetery(): Response
    {
        return Inertia::render('Cemeteries/LaVerkinCityCemetery');
    }

    public function virginCityCemetery(): Response
    {
        return Inertia::render('Cemeteries/VirginCityCemetery');
    }

    public function stGeorgeTempleHeadstones(): Response
    {
        return Inertia::render('Products/StGeorgeTempleHeadstones');
    }

    public function redCliffsTempleHeadstones(): Response
    {
        return Inertia::render('Products/RedCliffsTempleHeadstones');
    }
}
