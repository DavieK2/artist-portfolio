<?php

use App\Models\Work;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome');
Route::view('/works', 'work');
Route::view('/media', 'media');
Route::view('/about', 'about');
Route::view('/cv', 'cv');
Route::view('/contact', 'contact');
Route::view('/now-i-wear-myself', 'myself.index');
Route::view('/body-language', 'body_language.index');
Route::view('/unchained', 'unchained.index');

Route::get('/now-i-wear-myself/{illustration}', function($illustration){

    $work = Work::where('title', 'Now I Wear Myself')->where('illustration', $illustration)->first();
    return view('myself.show', compact('work'));
});

Route::get('/body-language/{illustration}', function($illustration){

    $work = Work::where('title', 'Body Language')->where('illustration', $illustration)->first();
    return view('body_language.show', compact('work'));
});

Route::get('/unchained/{illustration}', function($illustration){

    $work = Work::where('title', 'Unchained')->where('illustration', $illustration)->first();
    return view('unchained.show', compact('work'));
});

Route::get('/create', function(){

    Work::updateOrCreate(
        [
            'title' => 'Now I Wear Myself',
            'illustration' => 'Ama',
            'tools' => 'Ballpoint Pen, Ink,	Acrylic, Gold leaf on Archival paper',
            'dimensions' => '152cm x 244cm',
            'year' => '2020',
            'description' => 'The concept of self is one topic that will continue to awe and inspire the human race. How does one wear themselves? <br>
                                Humans have skilfully perfected the art of masking their true selves as a way of survival, like in primitive times, constantly adapting to suit societal patterns and expectations. The false self becomes a shield of sorts, protecting the true self from vulnerabilities about how we are expected to look, what we are expected to say and who we are expected to be. We are constantly diminishing our true design of being for fear of criticism and persecution from the never-resting powers, who have made it a point of duty to police everyone into one miserable mould, forgetting we were all created differently and that there is beauty in diversity.
                            ',
            'image' => 'Ama- Jacqueline Suowari 2021 1',    
        ],
    );

    Work::updateOrCreate(
        [
            'title' => 'Now I Wear Myself',
            'illustration' => 'Least Resistance',
            'tools' => 'Ballpoint Pen, Ink,	Acrylic, Gold leaf on Archival paper',
            'dimensions' => '152cm x 182cm',
            'year' => '2020',
            'description' =>    'Here lies the story you will not tell
                                Of battles you will never learn
                                Here lies the tales you will not hear
                                Of scars you will never feel
                                <br><br>
                                Choose least Resistance 
                                <br><br>
                                Here lies the story you will never tell 
                                Of sorrows grown and heros blown
                                Here lies wraps of traps 
                                And layers of dust.
                                <br><br>
                                Choose the uncertainty of certainties
                                <br><br>
                                Here lies a hope and a scope
                                Of lights you may never see
                                Here lies the beginning and the ending
                                Of lies that bind and blind',
            'image' => 'Least Resistance - Jacqueline Suowari 2021',    
        ]
    );

    Work::updateOrCreate(
        [
            'title' => 'Now I Wear Myself',
            'illustration' => 'What is understood need not be spoken',
            'tools' => 'Ballpoint Pen, Ink,	Acrylic, Gold leaf on Archival paper',
            'dimensions' => '152cm x 182cm',
            'year' => '2020',
            'description' =>    'Basking	in	the	peace	of	daylight	
                                Resting	with	the	glimpse	of	twilight	
                                My	favorite	torch	of	delight
                                <br><br>	
                                Feel	the	warmth	of	many	eyes
                                Layers	of	hearts	on	cold	ice
                                Basking	in	the	glimpse	of	delight
                                <br><br>	
                                Make	your	peace	from	within	
                                Fix	your	feet	and	leave-in
                                Resting	only	at	noons	night
                                <br><br>	
                                Embrace	the	loudest	silence	
                                Speak	with	silent	words
                                To	feel	is	to	be
                                <br><br>	
                                What	is	understood	need	not	be	spoken	',
            'image' => 'What is understood need not be spoken - Jacqueline Suowari 2021',    
        ]
    );
    
    Work::updateOrCreate(
        [
            'title' => 'Now I Wear Myself',
            'illustration' => 'Time waits no longer',
            'tools' => 'Ballpoint Pen, Ink,	Acrylic, Gold leaf on Archival paper',
            'dimensions' => '152cm x 182cm',
            'year' => '2020',
            'description' =>    'Time	stood	still	many	times	past
                                When	I	was	young	and	Unmarked	by	life’s	many	
                                realities	
                                <br><br>	
                                He	accompanied	me	every	second	of	my	life	and	
                                was	everything	I	dreamed	I	would	be
                                She	was	everything	I	put	on	hold	for	an	extra	nod	
                                and	smile	of	validation,	acceptance
                                <br><br>	
                                They	were	our	reluctance	to	give	attention	to	self	
                                because	time,	he	was	always	present	and	we	had	
                                him	forever,	holding	us	close,	keeping	us	united,	
                                Whispering	promises	of	wealth,	love	beyond	the	
                                Stars	and	sweet	sweet	nothings	in	my	ears,	
                                so	we	existed	rooted	in	her	while	she	saturated	me	
                                with	thoughts	and	blessings	
                                <br><br>
                                Then	she	whispered “Time	waits	no	longer”,	and	I	
                                knew	it	was	time	to	reach	for	the	stars.',
            'image' => 'Time wait no longer - Jacqueline Suowari 2021',    
        ]
    );
    Work::updateOrCreate(
        [
            'title' => 'Now I Wear Myself',
            'illustration' => 'Now or No-wear',
            'tools' => 'Ballpoint Pen, Ink,	Acrylic, Gold leaf on Archival paper',
            'dimensions' => '146cm	x	150cm',
            'year' => '2021',
            'description' =>    'How	can	you	tell	when	a	person	is	truly	happy
                                Is	it	because	their	hair	is	nappy,	carefully	woven	like	
                                rows	of	fabric.
                                How	can	you	feel	for	shame	or	the	lack	of	it
                                For	fame	and	the	lame	of	it
                                <br><br>
                                How	can	you	tell	when	a	person	is	truly	happy
                                Is	it	because	their	eyes	sparkle	or	their	cheeks	angle	
                                Like	an	open	pair	of	scissors.
                                How	can	you	feel	the	peace or	the	lack	of	it
                                The	bliss or	the	hiss	of	it	
                                <br><br>
                                How	can	you	tell	that	a	person	is	covered
                                Is	it	because they	cover	only	what	you	can	imagine
                                Like	a	fruit	covering	it	seeds
                                How	can	you	tell	a	need or	the	lack	of	it
                                For	creeds	and	deeds	past.
                                <br><br>
                                How	can	you	separate	now	from	nowhere',
            'image' => 'No or no-wear - Jacqueline Suowari 2021',    
        ]
    );
    Work::updateOrCreate(
        [
            'title' => 'Now I Wear Myself',
            'illustration' => 'Silence will uncover you',
            'tools' => 'Ballpoint Pen, Ink,	Acrylic, Gold leaf on Archival paper',
            'dimensions' => '152cm	x	244cm',
            'year' => '2020',
            'description' =>    'We	have	become	accustomed	to	the	silence
                                We	turn	a	blind	eye
                                Walk	away
                                ‘It’s	not	my	business’	you	say	
                                ‘Mind	your	business’	they	say
                                <br><br>
                                We	have	become	accustomed	to	the	silence
                                We	embrace	injustice	
                                We	embrace	oppression	
                                We	embrace	ill	practices	
                                Programmed	to	be	grateful	that	they	exist
                                <br><br>
                                We	have	become	accustomed	to	the	silence	
                                We	forget
                                Today,	it’s	Amaka’s	sister
                                Tomorrow	it	can	be	Adamu’s	brother	
                                <br><br>
                                And	when	everything	falls	to	dust
                                Your	silence	will	uncover	you	',
            'image' => 'Silence will unconver you - Jacqueline Suowari  2021 1',    
        ]
    );
    Work::updateOrCreate(
        [
            'title' => 'Now I Wear Myself',
            'illustration' => 'Inside life',
            'tools' => 'Ballpoint Pen, Ink,	Acrylic, Gold leaf on Archival paper',
            'dimensions' => '152cm	x	244cm',
            'year' => '2020',
            'description' =>    'The phrase, Inside life became popular in Nigeria, following the   release of Naira
                                Marley’s Soapy, The phrase, accurately referencing happenings behind closed
                                doors, experiences outside the norm and even ‘taboo’ practices that fester in
                                the silent secrets of human interaction. People would find out surprising details
                                about a person, confirmed or unconfirmed and exclaim “inside life”.
                                Fascinatingly, I understand that we only show people the versions we want
                                them to see; even more true is the seeming judgment which laced the term
                                every time it was used.
                                <br><br>
                                With this work, I am exploring the layers of multiple personalities in an
                                individual, the seen and unseen, the communicated and the relegated.
                                When last did you stop to think of your multiple personalities, and welcome
                                them to the table? This is your person and it’s your choice which of them you
                                show the world.
                                <br><br>
                                We all have an inside life
                                <br><br>
                                Let he who is without sin be the first to cast a stone',
            'image' => 'Inside life - Jacqueline Suowari 2021 1',    
        ]
    );

    Work::updateOrCreate(
        [
            'title' => 'Now I Wear Myself',
            'illustration' => 'Her eyes do all the talking',
            'tools' => 'Ballpoint Pen, Ink,	Acrylic, Gold leaf on Archival paper',
            'dimensions' => '152cm	x	182cm',
            'year' => '2020',
            'description' =>    'It’s not the way her smile hung out of	place
                                on	her	perfect	sculpted face that told	me	her	story <br>
                                It’s not the ridges	of	wrinkles on	her	brow	
                                birthed	from a constant	frown	that	gave	her	away
                                <br>
                                It’s not	her	meticulous	choice	of	words	and	
                                expressions	that alerted me	of the	walls	she	had erected
                                <br>
                                It’s not the anxiety that peaked	in	her	gestures	
                                whenever she was called	beautiful that	confided in	me	how	broken	she	was	inside <br>
                                It’s not the ingenuity	of	her	laughter <br>
                                It’s not the authenticity	of	her	tears <br>
                                It’s not the scars	on	the	back	of	her	ego that	led	me	to	understand	her	fears <br>
                                Its	not	how	amazing	she	was	at	being	alone <br>	
                                It’s	her	eyes... <br>
                                Her	eyes did all the talking.',
            'image' => 'Her eyes do all the talking - Jacqueline Suowari 2021',    
        ]
    );
    Work::updateOrCreate(
        [
            'title' => 'Now I Wear Myself',
            'illustration' => 'Comfort in the calm of shadows',
            'tools' => 'Ballpoint Pen, Ink,	Acrylic, Gold leaf on Archival paper',
            'dimensions' => '152cm	x	182cm',
            'year' => '2021',
            'description' =>    'In	the	still	of	the	dark
                                There	is	a	safe	haven	for	restless	souls
                                In	the	whisper	of	shadows	
                                There	is	the	peak	of	an	empty	whole
                                <br><br>
                                Afraid	to	come	into	the	light
                                Afraid	that	the	light	will	reveal	defects	
                                From	the	factory	
                                Afraid	that	the	light	would	turn	all	the	grays	
                                to	brilliant	hues
                                <br><br>	
                                Afraid	to	come	into	the	light
                                Restless	souls	can	move	in	the	shield	of	the	
                                night,	because	they	have	been	told	it	is	so
                                <br><br>
                                Today,	they	stretched	hands	into	the	light
                                and<br>
                                For	the	first	time,	life	was	beautiful.',
            'image' => 'Comfort in the calm of Shadow - Jacqueline Suowari  2020',    
        ]
    );
    Work::updateOrCreate(
        [
            'title' => 'Now I Wear Myself',
            'illustration' => 'You keep calling, say you miss me',
            'tools' => 'Ballpoint Pen, Ink,	Acrylic, Gold leaf on Archival paper',
            'dimensions' => '152cm	x	182cm',
            'year' => '2021',
            'description' =>    'I	remember	the	first	time	our	paths	crossed
                                It	was	summer
                                And	though	your	eyes	had	that	sparkle
                                You	were	always	in	a	gloom
                                Sunny	days	never	lit	up	the	dark	places	in	your	
                                heart.
                                <br><br>
                                I	remember	the	first	time	we	met	
                                It	was	summer	
                                And	though	I	could	always	smile	from	my	eyes	
                                I	was	always	in	a	mood
                                Blue	skies	never	melted	the	clouds		in	my	mind
                                <br><br>
                                We	were	the	same
                                <br><br>
                                So,	I	filled	up	the	dark	places	in	your	heart	
                                You	called	me	sunshine	
                                So,	you	melted	the	dark	places	in	my	mind
                                I	could	feel	the	blue	skies
                                <br><br>	
                                There	was	no	pain
                                <br><br>
                                These	days,	we	talk	for	hours	
                                Time	melts	into	nothing	when	we	are	here
                                I	see	the	longing	in	your	eyes
                                It	comes	in	a	glimpse
                                But	you’re	building	walls	to	keep	out	the pain
                                <br><br>
                                Yet,	you	keep	calling	
                                Just	say	that	you	miss	me',
            'image' => 'You keep calling, say you miss me- Jacqueline Suowari 2021',    
        ]
    );
    Work::updateOrCreate(
        [
            'title' => 'Now I Wear Myself',
            'illustration' => 'Transcendence',
            'tools' => 'Ballpoint Pen, Ink,	Acrylic, Gold leaf on Archival paper',
            'dimensions' => '152cm	x	182cm',
            'year' => '2020',
            'description' =>    'To	feel	the	light	on	my	skin
                                To	walk	with	feet	undetected	
                                To	make	a	lasting	impression	
                                To	fade	into	nothingness
                                To	feel	true	light
                                The	light	of	the	world
                                To	walk	in	paths	unseen
                                The	path	of	the	just
                                <br><br>
                                To	live	life	while	living	life
                                To	save happiness	while	being	happy	
                                To	bask	in	the	euphoria	of	pleasure	
                                The	pleasure	of	things	unseen
                                To	live	outside	your	mind
                                And	yet	be	mindful	
                                To	call	things	that	be	not
                                As	though	they	were
                                <br><br>
                                To	transcend',
            'image' => 'Transcendence - Jacqueline Suowari 2021',    
        ]
    );
    Work::updateOrCreate(
        [
            'title' => 'Now I Wear Myself',
            'illustration' => 'The energy within',
            'tools' => 'Ballpoint Pen, Ink,	Acrylic, Gold leaf on Archival paper',
            'dimensions' => '152cm	x	182cm',
            'year' => '2021',
            'description' =>    'Fragile and	strong
                                Young	and	wise
                                Slow	and	calculated	
                                Fast	and	calm
                                Thunder	and	lightning	
                                Showers	of	peace
                                <br><br>
                                Naked	and	frail
                                Removing	all	the	veils
                                Tails	between	your	legs
                                Lips	shaking
                                Feet	sweaty	
                                But	we	move
                                <br><br>
                                We	bend,	we	break,	we	pursue,	we	liquify,
                                we	evaporate	and	this	is	all	good if	it	births	the	
                                energy	within',
            'image' => 'The energy within - Jacqueline Suowari   2021',    
        ]
    );

    Work::updateOrCreate(
        [
            'title' => 'Now I Wear Myself',
            'illustration' => 'Red bottoms for the culture',
            'tools' => 'Ballpoint Pen, Ink,	Acrylic, Gold leaf on Archival paper',
            'dimensions' => '152cm	x	182cm',
            'year' => '2021',
            'description' =>    'Most	people	live	their	lives	as	open	books,	open	
                                for	all	to	see.	Some	others	prefer	to	show	you	
                                what	they	want	and	a	few	wait	for	you	to	find	
                                out.
                                <br><br>
                                They	say	not	to	judge	a	book	by	its	cover and	
                                this	is	as	true	as	we	can	come	to	truth.
                                For	indeed	we	are	a	people	who	own	many	
                                covers that	no	one	really	cares	to	uncover.
                                <br><br>
                                If	your	covers	begin	to	fall	away	like	onion	peels,	
                                who	will	we	find,	will	we	find	your	true	honest	
                                self;	the	person	who	wears	red	bottoms	for	the	
                                love	of	craft	and	details	or	the	one	who	wears	
                                them	for	the	culture?',
            'image' => 'Red bottoms for the culture - Jacqueline Suowari 2021',    
        ]
    );

    Work::updateOrCreate(
        [
            'title' => 'Now I Wear Myself',
            'illustration' => 'How to scream so no one can hear you',
            'tools' => 'Ballpoint Pen, Ink,	Acrylic, Gold leaf on Archival paper',
            'dimensions' => '152cm	x	182cm',
            'year' => '2021',
            'description' =>    'It’s	another	beautiful	day
                                The	birds	whisper	in	the	sky
                                And	the	sky,	it	is	as	pure	a	blue	as	it	could	
                                ever	be.
                                Sweet	fragrances	of	flowers	from	my	garden	
                                flow	calmly	into	my	room.
                                <br><br>
                                Its	another	beautiful	day
                                I	want	to	get	out	of	bed	and	touch	the	sky
                                To	douse	myself	in	its	purity
                                I	want	to	plant	my	feet	on	the	softness	of	the	
                                soil,	enchant	myself	with	the	roots	of	the	
                                earth	so	I	too	can	breathe a	fragrance	from	
                                my	soul.
                                <br><br>
                                I’ll	get	out	of	bed
                                Give	them	another	show
                                ‘Shade,	you	look	amazing as	always’ They’ll	
                                say	to	me	without	really	looking	at	me.
                                I’ll	say	‘thank	you’,	I’ll	smile…they	cant	see	
                                my	pain	or	that	I	cried	myself	to	sleep,
                                They	can	never	understand',
            'image' => 'How to scream so no one can hear you - Jacqueline Suowari 2021',    
        ]
    );

    Work::updateOrCreate(
        [
            'title' => 'Now I Wear Myself',
            'illustration' => 'Red room dialogue',
            'tools' => 'Ballpoint Pen, Ink,	Acrylic, Gold leaf on Archival paper',
            'dimensions' => '152cm	x	182cm',
            'year' => '2021',
            'description' =>    'What	do	you	see	when	you	look	at	your reflection
                                Are	you	haunted
                                Are	you	calm
                                Do	you	feel	your	heart	
                                Is	it	racing
                                Do	you	feel	your	palms	
                                Are	they	sweaty
                                <br><br>
                                What	do	you	see	when	you	look	at	
                                yourself	
                                Are	you	content
                                Are	you	eager
                                Do	you	follow	your	heart,
                                Does	it	leave	you	behind	
                                Do	you	want	the	fire
                                Are	you	content	',
            'image' => 'Dialogue in the Red room- Jacqueline Suowari 2021',    
        ]
    );

    Work::updateOrCreate(
        [
            'title' => 'Body Language',
            'illustration' => 'A Garland will fix it',
            'tools' => 'Ballpoint Pen, Ink Acrylic and Paper Collage on Paper',
            'dimensions' => '152cm x 182cm',
            'year' => '2018',
            'description' =>    'In a world where filters are the norm, creating the best version of you for social media platforms, it has become a matter of utmost importance to find comfort in one’s skin; in this vessel that you leave in. Self love has become a superpower. My darling, forget the version of you on your filter if it makes you feel uncomfortable with the person staring back at you when you look in the mirror. Embrace this person in the mirror, that is all you have because we both know that in the end, that garland doesn’t fix it.',

            'image' => 'A Garland will fix it - Jacqueline Suowari 2018 1',    
        ]
    );

    Work::updateOrCreate(
        [
            'title' => 'Body Language',
            'illustration' => 'Adaora (First daughter of the people)',
            'tools' => 'Ballpoint Pen, Ink and Acrylic on Paper',
            'dimensions' => '146cm x 152cm',
            'year' => '2018',
            'description' =>    'Being first born, makes you automatically responsible for your younger ones because they look up to you in many ways, unconsciously imbibing character traits and making life choices from your experiences. My parents always reminded me that it was something to be grateful for and consequently proud of and I agree. I agree that in a way, it feels good to be a leader and it feels good to be first but even life does not prepare you for the daunting task of being a role model or of being your brothers keeper, or of learning to put others first or of being a knight in shiny armor or of being a shoulder to cry on. Nobody prepares you for the reality of living with the expectations heaped on your shoulder but I am grateful for how having to live with and live through these experiences and expectations have shaped my life because in the end, what seemed hard and overwhelming have made me who I am.',
            
            'image' => 'Adaora - Jacqueline Suowari 2018 1',    
        ]
    );
    Work::updateOrCreate(
        [
            'title' => 'Body Language',
            'illustration' => 'Bed Peace',
            'tools' => 'Ballpoint Pen, Ink and Acrylic on Paper',
            'dimensions' => '146cm x 155cm',
            'year' => '2018',
            'description' =>    'My bed is a place of rest, a place where I find love and warmth. Soft pillows always ready to embrace the wholeness of my body.
            My bed is a place of depth, a place where I delve into thought without condemnation, silky sheets caressing away the rigors of the day.
            My bed is a place of peace, a place to listen to the breeze. Ceiling whites clearing my mind, preparing me for a knighted dose of restful bliss.',
            
            'image' => 'Bed Peace - Jacqueline Suowari 2018 1',    
        ]
    );
    Work::updateOrCreate(
        [
            'title' => 'Body Language',
            'illustration' => 'Bin Dunmou Tua Owei (The man with lots of hair)',
            'tools' => 'Ballpoint Pen, Ink and Acrylic on Paper',
            'dimensions' => '146cm x 155cm',
            'year' => '2018',
            'description' =>    'Hair is an important part of identity. The way a person chooses to carry their hair portrays a sense of confidence and self appreciation, especially when they choose to do it in a way that is not the usual. Dread locs and unusual amounts of facial hair in Nigeria used to only be associated with the spiritualist and mentally disturbed people and so was not widely accepted. Today, that ideology of identity is rapidly transforming in its narrative but some people are still passively discriminatory about it. So, being able to boldly and confidently carry hair this way whether you are male or female is something that I admire.',
            
            'image' => 'Bin Dunmuo Tua Owei Jacqueline Suowari 2018 1',    
        ]
    );
   

    Work::updateOrCreate(
        [
            'title' => 'Body Language',
            'illustration' => 'Comfort Zone',
            'tools' => 'Ballpoint Pen, Ink and Acrylic on Paper',
            'dimensions' => '152cm x 182cm',
            'year' => '2018',
            'description' =>    'I am constantly finding that people’s comfort zones and activities surrounding the notion of it can be quite fascinating. All of us have that place or that thing we indulge in privately that give us our balance. Some people who are in relationships where they should be free and able to bare all still feel the need to disguise and shield their comfort zone because of impending judgement from a loved one while others actually find pleasure in the secrecy of it.<br>
            One of the strengths I admire in Kevwe is her ability to own up and accept that getting high as we know it brings her peace and when asked what if this peace brings her pain? She laughs and says then it’s no longer peace or is it?',
            
            'image' => 'Comfort Zone - Jacqueline Suowari 2018 1',    
        ]
    );
    Work::updateOrCreate(
        [
            'title' => 'Body Language',
            'illustration' => 'Ifechukwude',
            'tools' => 'Ballpoint Pen, Ink and Acrylic on Paper',
            'dimensions' => '152cm x 244cm',
            'year' => '2018',
            'description' =>    'Bursts of energy, loud squeaks of laughter and overwhelming joy. This is how I would describe Ifechukwude. I remember spending one day with her and wondering how she could keep up with the energy her unending excitement at seemingly little things would demand because she never got tired of being happy. What if we were all like Ifechukwude, excited and grateful for the little things we now take for granted?',
            
            'image' => 'Ifechukwude - Jacqueline Suowari 2018 1',    
        ]
    );

    Work::updateOrCreate(
        [
            'title' => 'Body Language',
            'illustration' => 'Love over rules',
            'tools' => 'Ballpoint Pen, Ink and Acrylic on Paper',
            'dimensions' => '152cm x 182cm',
            'year' => '2018',
            'description' =>    'Inspired by a work by Hanks Willis Thomas, created as a tribute to his cousin who was murdered in 2000.<br>
            The concept of what love is, is one that has been greatly abused. True love allows you put yourself in another person’s shoes and let’s you realize that you are not any better or special than them. True love allows you give a person the benefit of doubt, it hopes for the best. True love makes you weigh your actions and reactions against how they might or might not affect a person. True love gives you the ability to appreciate and elevate humanity without discrimination and reservations, this sort of love overrules and is over rules.',
            
            'image' => 'Love Over Rules - Jacqueline Suowari 2018 1',    
        ]
    );
    Work::updateOrCreate(
        [
            'title' => 'Body Language',
            'illustration' => 'Mission Accomplished',
            'tools' => 'Ballpoint Pen, Ink and Acrylic on Paper',
            'dimensions' => '146cm x 152cm',
            'year' => '2018',
            'description' =>    'Have you ever worked tirelessly to achieve a desire? Remember all the endless efforts,
            the long laborious waiting, the restlessness, the pacing and the sleeplessness?<br>
            Remember going through all the motions and cross examining your intentions and actions?<br>
            Remember those voices that desperately seduced you to give up and how you
            stayed true to your resolve?<br>
            Remember why you didn’t give up?<br>
            Remember! Because it was all worth it in the end.',
            
            'image' => 'Mission Accomplished - Jacqueline Suowari 2018 1',    
        ]
    );
    Work::updateOrCreate(
        [
            'title' => 'Unchained',
            'illustration' => 'Bliss',
            'tools' => 'Ballpoint Pen, Ink and Acrylic on Paper',
            'dimensions' => '91cm x 122cm',
            'year' => '2014',
            'description' =>    'The painting explores self-awareness and confidence, a subject exuding contentment and self-assertiveness.',
            
            'image' => 'Bliss - Jacqueline Suowari 2017-01 1',    
        ]
    );

    Work::updateOrCreate(
        [
            'title' => 'Unchained',
            'illustration' => 'Breathe',
            'tools' => 'Ballpoint Pen, Ink and Acrylic on Paper',
            'dimensions' => '91cm x 122cm',
            'year' => '2014',
            'description' =>    'Ebipere is a strong, confident and stylish woman.. Like a lot people, Ebipere is searching for love but this love seems hard to grasp, it’s here today and gone tomorrow. What do you do when you give your all for a love you believe in, a love you could die for and get nothing in return? Here’s a suggestion “Sit back and breathe”.',
            
            'image' => 'Breathe - Jacqueline Suowari 2017-01 1',    
        ]
    );

    Work::updateOrCreate(
        [
            'title' => 'Unchained',
            'illustration' => 'Enchanted',
            'tools' => 'Ballpoint Pen, Ink and Acrylic on Paper',
            'dimensions' => '91cm x 121cm',
            'year' => '2014',
            'description' =>    '“Enchanted” explores the Afro funk fashion theme, where each appearance makes a statement that alludes to ones sense of fashion. A statement that is borne from a true sense of the knowledge of self.',
            
            'image' => 'Enchanted - Jacqueline Suowari',    
        ]
    );
    Work::updateOrCreate(
        [
            'title' => 'Unchained',
            'illustration' => 'Exhale',
            'tools' => 'Ballpoint Pen, Ink and Acrylic on Paper',
            'dimensions' => '91cm x 122cm',
            'year' => '2014',
            'description' =>    'In this piece, I marry the concept of pregnancy and the weight of its expectations with the thrill of satisfaction. “Exhale” is a metaphor for the pursuit of happiness”. I use the concept of pregnancy, precisely the end of the third trimester, where a
            mother is expectant and longing to meet and hold her new child...it could be any day now and it could be weeks. We all go through that phase in life where we have done all we know how to do and what is left is to wait. As you might well know, waiting isn’t quite comfortable and there is the temptation to be restless and anxious because...it could be any day now and it could be weeks too but let’s find peace in the moment and EXHALE.',
            
            'image' => 'Exhale - Jacqueline Suowari 2017-01 1',    
        ]
    );

    Work::updateOrCreate(
        [
            'title' => 'Unchained',
            'illustration' => 'Fatima',
            'tools' => 'Ballpoint Pen, Ink and Acrylic on Paper',
            'dimensions' => '122cm x 137cm',
            'year' => '2014',
            'description' =>    'This piece is a metaphor for freedom of expression and the limitless. Growing up in a society that hands you “a how to be
            female” handbook as young girl searching for answers and struggling to follow her dreams, I was always told girls don’t do this, girls don’t study that, etc.
            I believe the solution to life’s challenges in today’s world isn’t male or female;
            it is excellence!',
            
            'image' => 'Fatima - Jacqueline Suowari',    
        ]
    );

    Work::updateOrCreate(
        [
            'title' => 'Unchained',
            'illustration' => 'Flowers for Ada',
            'tools' => 'Ballpoint Pen, Ink and Acrylic on Paper',
            'dimensions' => '91cm x 122cm',
            'image' => 'Flowers For Ada - Jacqueline Suowari 2017 1',
            'year' => '2014',
            'description' =>    'The painting tells a story of love centred around a girl and two men who crave for her attention and heart. Ada loves sunflowers and her admirers burden themselves with the task of getting them for her. But only one of them is her true love.
            Who will it be, and what if we choose wrong? Decisions are ripple effects, what we choose to do or not do today determines the cause of our future.',
        ]
    );

    Work::updateOrCreate(
        [
            'title' => 'Unchained',
            'illustration' => 'Girl with the Blue Scarf',
            'tools' => 'Ballpoint Pen, Ink and Acrylic, Paper Collage on Paper',
            'dimensions' => '91cm x 122cm',
            'year' => '2014',
            'description' =>    'The painting explores afro pop culture and style. The solitary image, in monochrome, stands out with a blue scarf. The concept of self-assertion and confidence is further portrayed the drawing as the young woman poses with a direct and striking look.',
            
            'image' => 'Girl with the blue scarf - Ballpoint Pen 2017 1',    
        ]
    );

    Work::updateOrCreate(
        [
            'title' => 'Unchained',
            'illustration' => 'Of Burdens and Triumphs',
            'tools' => 'Ballpoint Pen, Ink and Acrylic on Paper',
            'dimensions' => '79cm x 110cm',
            'year' => '2014',
            'description' =>    'Old age is synonymous with experience, stories and a wealth of knowledge. I have always been intrigued by the beauty of ageing, how each old person can have countless stories on their faces worn like a badge of honour in the form of wrinkles. From the burden of experience that literally shatters the will to try new things and be adventurous to the joy that comes with each small victory that one took for granted in the younger days. I still remember how my late grandparents always got excited when they danced, like it was something to be grateful for.',
            
            'image' => 'Of Burdens & Triumphs - Jacqueline Suowari 2017 1',    
        ]
    );

    
    Work::updateOrCreate(
        [
            'title' => 'Unchained',
            'illustration' => 'Shakara',
            'tools' => 'Ballpoint Pen, Ink and Acrylic on Paper',
            'dimensions' => '122cm x 183cm',
            'year' => '2020',
            'description' =>    'Shakara is a colloquial term in Nigeria used to express self-confidence, assertiveness, poise, body consciousness, a great sense of fashion or the freedom and confidence of exploring your beauty and loving the skin you live in. In another light, it is used to describe the pride of being beautiful or good looking. “Shakara” explores the vanity of beauty and a behaviour that is common among beautiful young ladies who demand attention and affection because of their look, failing to realise that it is fleeting or ephemeral. I believe no one should be bound/enslaved by the societal concepts of beauty. The true “Shakara” should come from a sense of identity that emanates from being comfortable and content in the skin/body you live in. True beauty emanates from within in the linear nature of awareness and this beauty is never fleeting.',
            
            'image' => 'Shakara - Jacqueline Suowari',    
        ]
    );
    Work::updateOrCreate(
        [
            'title' => 'Unchained',
            'illustration' => 'Sunny Side Up',
            'tools' => 'Ballpoint Pen, Ink and Acrylic on Paper',
            'dimensions' => '91cm x 122cm',
            'year' => '2014',
            'description' =>    'From ancient times, the sun has been synonymous with joy, happiness, laughter and abundance. Everyone needs the sun in their lives to help appreciate the many colours it brings to life; colours of hope, of possibilities and happiness. Keep your sunny side up. “When I think of the sun, I think of my daughter; how she came into our lives and added colour to it. I can honestly compare the feeling of how she rushes towards the door to welcome me when I return home to the rising sun in the morning and the “light explosion” that follows. I live for moments such as these.',
            
            'image' => 'Sunny side Up - Jacqueline Suowari 2017 1',    
        ]
    );

    Work::updateOrCreate(
        [
            'title' => 'Unchained',
            'illustration' => 'The Virgin',
            'tools' => 'Ballpoint Pen, Ink and Acrylic on Paper',
            'dimensions' => '91cm x 122cm',
            'year' => '2014',
            'description' =>    'This is a visual oxymoron that challenges the narrative of virginity – a common notion of how a woman might be perceived if she is a virgin; chaste, quiet, gentle and sublime. It alludes to the common saying that one shouldn’t judge a book by its cover”. We should never conform to stereotypical conclusions because nothing is this life is what it seems.',
            
            'image' => 'The Virgin - Jacqueline Suowari 2017 1',    
        ]
    );

    Work::updateOrCreate(
        [
            'title' => 'Unchained',
            'illustration' => 'What If',
            'tools' => 'Ballpoint Pen, Ink and Acrylic on Paper',
            'dimensions' => '122cm x 122cm',
            'year' => '2014',
            'description' =>    'It is often said that where there is life, there is hope, but this life is filled with questions, suggestions and crossroads. This piece<br>
            “From ancient times, the sun has been synonymous with joy, happiness, laughter and abundance. Everyone needs the sun in
             reflects the inner contemplations of the heart and the intuition that sprout into actions. “As a young girl growing up in Northern Nigeria, one of the major ‘what if’ questions I had to contemplate was when at the age of 11 my friend Mariam had stopped coming to school and upon further enquiries, I was told she had been married off to her father’s friend. The questions that plagued my young and confused heart at the time were countless; What if she is sad, What if she is happy, What if she never comes back to school, What if I never see her again, What if.... ? I never saw Mariam again',
            
            'image' => 'What If - Jacqueline Suowari 2017 1',    
        ]
    );

});