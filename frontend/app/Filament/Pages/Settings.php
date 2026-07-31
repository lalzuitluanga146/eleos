<?php

namespace App\Filament\Pages;

use App\Models\Homepage;
use App\Models\Setting;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class Settings extends Page implements HasForms
{
    protected string $view = 'filament.pages.settings';

    use InteractsWithForms;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Cog6Tooth;

    protected static string|\UnitEnum|null $navigationGroup = 'Website Content';

    protected static ?string $navigationLabel = 'Site Settings';

    protected static ?int $navigationSort = 1;

    public ?array $data = [];

    public function mount(): void
    {
        $setting = Setting::current();
        $homepage = Homepage::current();

        $this->form->fill([
            ...$setting->toArray(),
            ...$homepage->toArray(),
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Settings')
                    ->tabs([
                        Tab::make('General')
                            ->icon(Heroicon::OutlinedBuildingOffice)
                            ->schema([
                                Section::make('Clinic identity')
                                    ->description('The name and tagline shown across the website.')
                                    ->columns(2)
                                    ->schema([
                                        TextInput::make('clinic_name')
                                            ->required()
                                            ->maxLength(255),
                                        TextInput::make('clinic_tagline')
                                            ->maxLength(255),
                                    ]),

                                Section::make('Brand assets')
                                    ->description('Upload the logo and browser icon used by the website.')
                                    ->columns(2)
                                    ->schema([
                                        FileUpload::make('logo')
                                            ->image()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('settings')
                                            ->imageEditor(),
                                        FileUpload::make('favicon')
                                            ->label('Favicon')
                                            ->image()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('settings')
                                            ->imageEditor(),
                                    ]),
                                Section::make('Other')
                                    ->columns(2)
                                    ->schema([
                                        TextInput::make('happy_patient')
                                            ->numeric()
                                            ->required(),
                                        TextInput::make('patient_rating')
                                            ->numeric()
                                            ->minValue(1)
                                            ->maxValue(5)
                                            ->hint('Rating must be between 1 and 5.')
                                            ->required(),
                                        Textarea::make('clinic_description')
                                            ->rows(5)
                                            ->autosize()
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        Tab::make('Homepage')
                            ->icon(Heroicon::OutlinedHome)
                            ->schema([
                                Section::make('Hero section')
                                    ->description('The first section visitors see when they open the website.')
                                    ->columns(2)
                                    ->schema([
                                        TextInput::make('hero_badge')
                                            ->label('Eyebrow / badge')
                                            ->maxLength(255),
                                        TextInput::make('hero_title')
                                            ->required()
                                            ->maxLength(255),
                                        Textarea::make('hero_description')
                                            ->rows(5)
                                            ->autosize()
                                            ->columnSpanFull(),
                                        FileUpload::make('hero_image')
                                            ->label('Hero image')
                                            ->image()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('homepage')
                                            ->imageEditor()
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('About section')
                                    ->description('Introduce the dentist and the clinic’s approach to care.')
                                    ->columns(2)
                                    ->schema([
                                        TextInput::make('about_badge')
                                            ->label('Eyebrow / badge')
                                            ->maxLength(255),
                                        TextInput::make('about_title')
                                            ->required()
                                            ->maxLength(255),
                                        Textarea::make('about_description')
                                            ->rows(5)
                                            ->columnSpanFull()
                                            ->autosize(),
                                        FileUpload::make('about_image')
                                            ->label('About image')
                                            ->image()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('homepage')
                                            ->imageEditor()
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Section introductions')
                                    ->description('Expand a section below to edit its badge, heading, and introductory text.')
                                    ->schema([
                                        Grid::make(2)
                                            ->schema([
                                                Section::make('Services')
                                                    ->icon(Heroicon::OutlinedWrenchScrewdriver)
                                                    ->collapsible()
                                                    ->collapsed()
                                                    ->persistCollapsed()
                                                    ->schema([
                                                        TextInput::make('services_badge')
                                                            ->label('Badge'),
                                                        TextInput::make('services_title')
                                                            ->label('Heading'),
                                                        Textarea::make('services_description')
                                                            ->label('Introduction')
                                                            ->autosize()
                                                            ->rows(3),
                                                    ]),

                                                Section::make('Why choose us')
                                                    ->icon(Heroicon::OutlinedHeart)
                                                    ->collapsible()
                                                    ->collapsed()
                                                    ->persistCollapsed()
                                                    ->schema([
                                                        TextInput::make('why_choose_badge')
                                                            ->label('Badge'),
                                                        TextInput::make('why_choose_title')
                                                            ->label('Heading'),
                                                        Textarea::make('why_choose_description')
                                                            ->label('Introduction')
                                                            ->autosize()
                                                            ->rows(3),
                                                    ]),

                                                Section::make('Testimonials')
                                                    ->icon(Heroicon::OutlinedStar)
                                                    ->collapsible()
                                                    ->collapsed()
                                                    ->persistCollapsed()
                                                    ->schema([
                                                        TextInput::make('testimonials_badge')
                                                            ->label('Badge'),
                                                        TextInput::make('testimonials_title')
                                                            ->label('Heading'),
                                                        Textarea::make('testimonials_description')
                                                            ->label('Introduction')
                                                            ->autosize()
                                                            ->rows(3),
                                                    ]),

                                                Section::make('FAQ')
                                                    ->icon(Heroicon::OutlinedQuestionMarkCircle)
                                                    ->collapsible()
                                                    ->collapsed()
                                                    ->persistCollapsed()
                                                    ->schema([
                                                        TextInput::make('faq_badge')
                                                            ->label('Badge'),
                                                        TextInput::make('faq_title')
                                                            ->label('Heading'),
                                                        Textarea::make('faq_description')
                                                            ->label('Introduction')
                                                            ->autosize()
                                                            ->rows(3),
                                                    ]),

                                                Section::make('Gallery')
                                                    ->icon(Heroicon::OutlinedPhoto)
                                                    ->collapsible()
                                                    ->collapsed()
                                                    ->persistCollapsed()
                                                    ->schema([
                                                        TextInput::make('gallery_badge')
                                                            ->label('Badge'),
                                                        TextInput::make('gallery_title')
                                                            ->label('Heading'),
                                                        Textarea::make('gallery_description')
                                                            ->label('Introduction')
                                                            ->autosize()
                                                            ->rows(3),
                                                    ]),
                                            ]),
                                    ]),
                            ]),

                        Tab::make('Doctor')
                            ->icon(Heroicon::OutlinedUserCircle)
                            ->schema([
                                Section::make('Professional profile')
                                    ->description('The dentist information displayed in the About section.')
                                    ->columns(2)
                                    ->schema([
                                        TextInput::make('doctor_name')
                                            ->label('Name')
                                            ->maxLength(255),
                                        TextInput::make('doctor_qualification')
                                            ->label('Qualification')
                                            ->maxLength(255),
                                        TextInput::make('doctor_specialization')
                                            ->label('Specialization')
                                            ->maxLength(255),
                                        TextInput::make('doctor_registration_number')
                                            ->label('Registration number')
                                            ->maxLength(255),
                                        TextInput::make('doctor_experience')
                                            ->numeric()
                                            ->label('Experience'),
                                    ]),
                            ]),

                        Tab::make('Contact')
                            ->icon(Heroicon::OutlinedPhone)
                            ->schema([
                                Section::make('Contact details')
                                    ->description('These details are used in the contact section and footer.')
                                    ->columns(2)
                                    ->schema([
                                        TextInput::make('phone')
                                            ->tel(),
                                        TextInput::make('whatsapp')
                                            ->label('WhatsApp number')
                                            ->tel(),
                                        TextInput::make('email')
                                            ->email(),
                                        TextInput::make('google_maps_url')
                                            ->label('Google Maps link')
                                            ->url(),
                                        Textarea::make('address')
                                            ->rows(3)
                                            ->autosize()
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Opening hours')
                                    ->description('Edit the hours beside each day. Use “Closed” when the clinic is not open.')
                                    ->schema([
                                        KeyValue::make('opening_hours')
                                            ->keyLabel('Day')
                                            ->valueLabel('Hours'),
                                    ]),

                                Section::make('Social media')
                                    ->description('Leave a link empty to hide that social icon.')
                                    ->columns(2)
                                    ->schema([
                                        TextInput::make('facebook_url')->url(),
                                        TextInput::make('instagram_url')->url(),
                                        TextInput::make('youtube_url')->url(),
                                        TextInput::make('linkedin_url')->url(),
                                    ]),
                            ]),

                        Tab::make('SEO')
                            ->icon(Heroicon::OutlinedMagnifyingGlass)
                            ->schema([
                                Section::make('Search engine appearance')
                                    ->description('These values control the browser title and search-engine description for the homepage.')
                                    ->schema([
                                        TextInput::make('meta_title')
                                            ->maxLength(255),
                                        Textarea::make('meta_description')
                                            ->rows(5)
                                            ->autosize()
                                            ->maxLength(200),
                                    ]),
                            ]),
                    ])
                    ->persistTab(),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $state = $this->form->getState();

        Setting::current()->update($state);
        Homepage::current()->update($state);

        Notification::make()
            ->title('Settings updated')
            ->success()
            ->send();
    }
}
