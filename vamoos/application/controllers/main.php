<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	 function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
		$this->load->library('table');
		$this->load->library('form_validation');
	}

	public function index()
	{
	/*
		$this->load->view('header');
		$this->load->view('home');
	*/
		$this->load->view('login');
	}


	public function frameset1()
	{
		$this->load->view('top1');
		$this->load->view('header1');
		$this->load->view('home1');
	}

//======================VAMOOS Tables: Start==========================

// SPORTS  table
	public function sports()
	{
		$this->load->view('top1_sports');
		$this->load->view('header1');
		$crud = new grocery_CRUD();


		$crud->set_theme('datatables');
		$crud->set_table('sports');
		$crud->set_subject('sport');

		$crud->columns('sportID', 'sport', 'governingBody', 'acronym', 's_from_date', 's_to_date', 'venue', 'event');
		$crud->fields('sport', 'governingBody', 'acronym', 's_from_date', 's_to_date');
		$crud->required_fields('sport', 's_from_date', 's_to_date');

		// Many-to-many relationship TO VENUE table
		$crud->set_relation_n_n('venue', 'sport_has_venue', 'venues', 'sportID', 'venueID', 'venue');

		//Many-to-many relationship TO EVENTS table
		$crud->set_relation_n_n('event', 'sport_has_event', 'events', 'sportID', 'eventID', 'event');

		$crud->display_as('sportID', 'Sport ID');
		$crud->display_as('sport', 'Sport');
		$crud->display_as('governingBody', 'Governing Body');
		$crud->display_as('acronym', 'Acronym');
		$crud->display_as('s_from_date', 'Start Date');
		$crud->display_as('s_to_date', 'End Date');

		//UAT Part 6 (5): Error messages are meaningful & helpful
		//Test Plan : Validation
		$crud->set_rules('sport','Sport','alpha_numeric_spaces|max_length[30]|required');
		$crud->set_rules('governingBody', 'Governing Body', 'alpha_numeric_spaces|max_length[45]');
		$crud->set_rules('acronym', 'Acronym',  'alpha_numeric_spaces|max_length[10]');
		
		//Test Plan: Validation of  DATE fields
		$crud->set_rules('s_from_date', 'Start Date', 'callback_valid_date|required' );
		$crud->set_rules('s_to_date', 'End Date', 'callback_valid_date|required' );
		
		$crud->unset_export();
		
		$output = $crud->render();
		$this->sports_output($output);

	}

	public function sports_output($output = null)
	{
		$this->load->view('sports_view.php', $output);

	}

	//SPORT_HAS_VENUE table joins SPORTS table & VENUES table
	public function sport_has_venue()
	{
		/*$this->load->view('top1_sport_has_venue');
		$this->load->view('header1');
		*/
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('sport_has_venue');
		$crud->set_subject('venue of sport');
		$crud->fields('sportID', 'venueID');
		$crud->required_fields('sportID', 'venueID');

		// One-to-Many relationships
		$crud->set_relation('sportID', 'sports', '{sportID} - {sport}');
		$crud->set_relation('venueID', 'venues', '{venueID} - {venue}');

		$crud->display_as('sportID', 'Sport ID');
		$crud->display_as('venueID', 'Venue ID');

		/*$output = $crud->render();
		$this->sport_has_venue_output($output);*/

	}

	/*function sport_has_venue_output($output = null)
	{
		$this->load->view('sport_has_venue_view.php', $output);
	}*/

	//SPORT_HAS_EVENT table joins SPORTS table & EVENTS table
	public function sport_has_event()
	{
		/*$this->load->view('top1_sport_has_event');
		$this->load->view('header1');*/

		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('sport_has_event');
		$crud->set_subject('event of sport');
		$crud->fields('sportID', 'eventID');
		$crud->required_fields('sportID', 'eventID');

		// One-to-Many relationships
		$crud->set_relation('sportID', 'sports', '{sportID} - {sport}');
		$crud->set_relation('eventID', 'events', '{eventID} - {event}');

		$crud->display_as('sportID', 'Sport ID');
		$crud->display_as('eventID', 'Event ID');
		/*
		$output = $crud->render();
		$this->sport_has_event_output($output);*/
	}

	/*function sport_has_event_output($output = null)
	{
		$this->load->view('sport_has_event_view.php', $output);
	}*/

	// VENUES  table
	public function venues()
	{
		$this->load->view('top1_venues');
		$this->load->view('header1');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('venues');
		$crud->set_subject('venue');

		$crud->columns('venueID', 'venue', 'area',  'sport', 'event');
		$crud->fields('venue', 'area', 'sport');
		$crud->required_fields('venue', 'area', 'sport');

		// Many-to-many relationship to SPORTS table
		$crud->set_relation_n_n('sport', 'sport_has_venue', 'sports', 'venueID', 'sportID', 'sport');

		// Many-to-many relationship to ENTRYLOGS table
		//$crud->set_relation_n_n('entry_Log', 'venue_has_entrylog', 'entryLogs', 'venueID', 'entryLogID', 'entryDate');

		// Many-to-many relationship to EVENTS table
		$crud->set_relation_n_n('event', 'event_has_venue', 'events', 'venueID', 'eventID', 'event');

		//Many-to-many relationship to OFFICIALS table
		$crud->set_relation_n_n('official', 'official_has_venue', 'officials', 'venueID', 'officialID', 'officialName');

		// Many-to-many relationship to CARDS table
		//$crud->set_relation_n_n('card', 'card_has_venue', 'cards', 'venueID', 'cardID', 'c_start_date');
		//$crud->set_relation_n_n('card', 'card_has_venue', 'cards', 'venueID', 'cardID', 'officialID');

		$crud->display_as('venueID', 'Venue ID');
		$crud->display_as('venue', 'Venue');
		$crud->display_as('area', 'Area');
		$crud->display_as('v_start_date', 'Start Date');
		$crud->display_as('v_end_date', 'End Date');

		//UAT Part 6 (5): Error messages are meaningful & helpful
		//Test Plan : Validation
		$crud->set_rules('venue', 'Venue', 'alpha_numeric_spaces|maxlength[45]|required');
		$crud->set_rules('area', 'Area', 'alpha_numeric_spaces|maxlength[45]|required');

		$output = $crud->render();
		$this->venues_output($output);
	}

	function venues_output($output = null)
	{
		$this->load->view('venues_view.php', $output);
	}

	// ENTRYLOGS table
	public function entrylogs()
	{
		$this->load->view('top1_entrylogs');
		$this->load->view('header1');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('entrylogs');
		$crud->set_subject('entry log');
		
		$crud->columns('entryLogID',  'cardID', 'entryDate','venue','access_status');
		$crud->fields('cardID', 'entryDate', 'venue', 'access_status');
		$crud->required_fields('entryDate','venue', 'cardID', 'access_status');
		
		/*$crud->columns('entryLogID', 'entryDate','venueID', 'cardID', 'officialID', 'authorisedID');
		$crud->fields('entryDate','venueID', 'cardID', 'officialID', 'authorisedID');
		$crud->required_fields('entryDate','cardID','venueID', 'cardID', 'officialID', 'authorisedID');*/

		//Many-to-one relationship to OFFICIALS table
		//$crud->set_relation('officialID','officials', '{officialID} - {officialName}');

		//Many-to-one relationships to CARDS table
		$crud->set_relation('cardID', 'cards', 'Card ID: {cardID} \nOfficial ID:{officialID}');

		// Many-to-one relationship to VENUES table
		//$crud->set_relation('venueID',  'venues', 'venue');

		/*
		//Many-to-many relationship to OFFICIALS table
		$crud->set_relation('official', 'official_has_entrylog', 'officials', 'entryLogID', 'officialID', '{firstName} {lastName}');

		//Many-to-many relationships to CARDS table
		$crud->set_relation('card', 'entrylog_has_card', 'cards', 'entryLogID', 'cardID', 'cardID');

		// Many-to-many relationship to VENUES table
		$crud->set_relation('venue', 'venue_has_entrylog', 'venues', 'entryLogID', 'venueID', 'venue');

		*/

		//One-to-one relationship to AUTHORISED table
		//$crud->set_relation('authorisedID', 'authorised', '{authorisedID} - {state}');

		$crud->display_as('entryLogID', 'Entry Log ID');
		$crud->display_as('entryDate', 'Entry Date');
		//$crud->display_as('authorisedID', 'Authorised ID');
		//$crud->display_as('venueID', 'Venue ID');
		//$crud->display_as('officialID', 'Official ID');
		$crud->display_as('cardID', 'Card ID');
		$crud->display_as('access_status', 'Access Status');

		//Briefing sheet (page 4): functional requirement - not allow amendment of entries
		//Remove Delete & Edit buttons
		 $crud->unset_delete();
		 $crud->unset_edit();
		  $crud->unset_add();

		//UAT Part 6 (5): Error messages are meaningful & helpful
		//Test Plan : Validation of DATE field
		$crud->set_rules('entryDate', 'Entry Date', 'callback_valid_date|required');

		$output = $crud->render();
		$this->entrylogs_output($output);
	}

	function entrylogs_output($output = null)
	{
		$this->load->view('entrylogs_view.php', $output);
	}

	/*
	//VENUE_HAS_ENTRYLOG Table joins VENUES table & ENTRYLOGS table
	public function venue_has_entrylog()
	{
		$this->load->view('top1_venue_has_entrylog');
		$this->load->view('header1');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('venue_has_entrylog');
		$crud->set_subject('entry log of venue');
		$crud->fields('venueID', 'entryLogID');
		$crud->required_fields('venueID', 'entryLogID');

		// One-to-Many relationships
		$crud->set_relation('venueID', 'venues', '{venueID} - {venue}');
		$crud->set_relation('entryLogID', 'entrylogs', '{entryLogID} - {entryDate}');

		$crud->display_as('venueID', 'Venue ID');
		$crud->display_as('entryLogID', 'Entry Log ID');

		$output = $crud->render();
		$this->venue_has_entrylog_output($output);
	}

	function venue_has_entrylog_output($output = null)
	{
		$this->load->view('venue_has_entrylog_view.php', $output);
	}
	*/

	/*
	// OFFICIAL_HAS_ENTRYLOG Table joins OFFICIAL Table & ENTRYLOG Table
	public function official_has_entrylog()
	{
		//$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('official_has_entrylog');
		$crud->set_subject('entry log of official');
		$crud->fields('officialID', 'entryLogID');
		$crud->required_fields('officialID', 'entryLogID');

		// One-to-Many relationships
		$crud->set_relation('officialID', 'officials', '{officialID} - {firstName} {lastName}');
		$crud->set_relation('entryLogID', 'entrylogs', 'entryDate');

		$crud->display_as('officialID', 'Official ID');
		$crud->display_as('entryLogID', 'Entry Log ID');

		$output = $crud->render();
		$this->official_has_entrylog_output($output);
	}

	function official_has_entrylog_output($output = null)
	{
		$this->load->view('official_has_entrylog_view.php', $output);
	}
	*/
	/*
	//ENTRYLOG_HAS_CARD Table joins ENTRYLOG Table & CARD Table
	public function entrylog_has_card()
	{
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('entrylog_has_card');
		$crud->set_subject('card of entry log');
		$crud->fields('entryLogID', 'cardID');
		$crud->required_fields('entryLogID', 'cardID');

		// One-to-Many relationships
		$crud->set_relation('entryLogID', 'entrylogs', 'entryDate');
		$crud->set_relation('cardID', 'cards', '{cardID} - {authorisedID}');

		$crud->display_as('entryLogID', 'Entry Log ID');
		$crud->display_as('cardID', 'Card ID');

		$output = $crud->render();
		$this->entrylog_has_card_output($output);
	}

	function entrylog_has_card_output($output = null)
	{
		$this->load->view('entrylog_has_card_view.php', $output);
	}
	*/

	// CARDS table
	public function cards()
	{
		$this->load->view('top1_cards');
		$this->load->view('header1');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('cards');
		$crud->set_subject('card');

		$crud->columns('cardID', 'c_start_date', 'c_end_date', 'officialID',  'venue', 'authorisedID');
		$crud->fields('c_start_date', 'c_end_date', 'officialID', 'venue', 'authorisedID');
		$crud->required_fields('c_start_date', 'c_end_date', 'officialID', 'venue', 'authorisedID');

		//Many-to-one relationship to SPORTS table
		//$crud->set_relation('sportID','sports','{sportID} - {sport}');

		//Many-to-one relationship to OFFICIALS table
		$crud->set_relation('officialID','officials','{officialID} - {officialName}');

		// Many-to-many relationship to VENUES table
		$crud->set_relation_n_n('venue', 'card_has_venue', 'venues', 'cardID', 'venueID', 'venue');

		//Many-to-many relationships to ENTRYLOG table
		//$crud->set_relation_n_n('entry_Log', 'entrylog_has_card', 'entryLogs', 'cardID', 'entryLogID', 'entryDate');

		//Many-to-many relationships to EVENTS table
		$crud->set_relation_n_n('event', 'authorise_card', 'events', 'cardID', 'eventID', 'event');

		//One-to-one relationship to AUTHORISED table
		$crud->set_relation( 'authorisedID', 'authorised', '{authorisedID} - {state}');

		//Many-to-one relationship to AUTHORISE_CARD table
		//$crud->set_relation('statusID', 'authorise_card', '{statusID} - {authorisedID}');

		$crud->display_as('cardID', 'Card ID');
		$crud->display_as('c_start_date', 'Card Start Date');
		$crud->display_as('c_end_date', 'Card End Date');
		$crud->display_as('authorisedID', 'Authorised ID');
		$crud->display_as('officialID', 'Official ID');
		//$crud->display_as('sportID', 'Sport ID');
		//$crud->display_as('statusID', 'Status ID');

		//UAT Part 2(2): Register official and Issue cards and Give authorisation
		$crud->add_action('Give Authorisation', ' ', 'main/authorise_card/add');

		//UAT Part 2(3) Default values in date fields
		$crud->callback_add_field('c_start_date', function (){
			return '<input maxlength="10" value="03/08/2016" name = "c_start_date">';
		});
		$crud->callback_add_field('c_end_date', function (){
			return '<input maxlength="10" value="21/08/2016" name = "c_end_date">';
		});
		
		//UAT Part 6 (5): Error messages are meaningful & helpful
		//Test Plan : Validation of DATE fields
		$crud->set_rules('c_start_date', 'Card Start Date', 'callback_valid_date|required');
		$crud->set_rules('c_end_date', 'Card End Date', 'callback_valid_date|required');

// CHANGED !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
		$state = $crud->getState();
		
		$output = $crud->render();
		
		if($state == 'add')
		{
		$js='<script>$(\'select[name="authorisedID"] option[value="1"]\').attr("selected", "selected");</script>';
		$output->output .= $js;	
		}
		
		$this->cards_output($output);
	}

	function cards_output($output = null)
	{
		$this->load->view('cards_view.php', $output);
	}

	// AUTHORISED table
	public function authorised()
	{
		$this->load->view('header1');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('authorised');
		$crud->set_subject('authorised');
		$crud->fields('authorisedID', 'state');
		$crud->required_fields('authorisedID', 'state');

		//One-to-one relationship to ENTRYLOG table
		$crud->set_relation('entryLogID', 'entrylogs', '{entryLogID} - {entryDate}');

		//One-to-one relationship to CARD table
		//$crud->set_relation('cardID', 'cards', '{cardID} - {officialID}');

		$crud->display_as('authorisedID', 'Authorised ID');
		$crud->display_as('state', 'State');

		/*$output = $crud->render();
		$this->authorised_output($output);*/
	}

	// CARD_HAS_VENUE table joins CARDS table & VENUES table
	public function card_has_venue()
	{
		$this->load->view('top1_card_has_venue');
		$this->load->view('header1');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('card_has_venue');
		$crud->set_subject('venue of card');
		$crud->fields('cardID', 'venueID');
		$crud->required_fields('cardID', 'venueID');

		// One-to-Many relationships
		$crud->set_relation('cardID', 'cards', 'cardID');
		$crud->set_relation('venueID', 'venues', '{venueID} - {venue}');

		$crud->display_as('cardID', 'Card ID');
		$crud->display_as('venueID', 'Venue ID');

		$output = $crud->render();
		$this->card_has_venue_output($output);
	}

	function card_has_venue_output($output = null)
	{
		$this->load->view('card_has_venue_view.php', $output);
	}


	// EVENTS table
	public function events()
	{
		$this->load->view('top1_events');
		$this->load->view('header1');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('events');
		$crud->set_subject('event');

		//$crud->columns('eventID', 'event', 'date_of_event', 'gender', 'sport', 'venue', 'official');
		$crud->columns('eventID', 'event', 'date_of_event', 'gender', 'sport', 'venue');
		$crud->fields('event', 'date_of_event', 'gender', 'sport',  'venue');
		$crud->required_fields('event',  'date_of_event', 'sport',  'venue');

		//Many-to-many relationship to SPORTS table
		$crud->set_relation_n_n('sport', 'sport_has_event', 'sports', 'eventID', 'sportID', 'sport');

		//Many-to-many relationships to CARDS table
		//$crud->set_relation_n_n('card', 'authorise_card', 'cards', 'eventID', 'cardID', 'cardID');

		// Many-to-many relationship to VENUES table
		$crud->set_relation_n_n('venue', 'event_has_venue', 'venues', 'eventID', 'venueID', 'venue');

		//Many-to-many relationship to OFFICIALS table
		$crud->set_relation_n_n('official', 'official_has_event', 'officials', 'eventID', 'officialID', '{officialName}');

		$crud->display_as('eventID', 'Event ID');
		$crud->display_as('event', 'Event');
		//$crud->display_as('venue', 'Venue');
		$crud->display_as('date_of_event', 'Event Date');
		$crud->display_as('gender', 'Gender');

		//UAT Part 3(1): Add authorisation for a event after an event venue is changed
		//$crud->add_action('Give Authorisation', ' ', 'main/authorise_card/add');

		//UAT Part 6 (5): Error messages are meaningful & helpful
		//Test Plan : Validation
		$crud->set_rules('event', 'Event', 'alpha_numeric_spaces|maxlength[45]|required');
		$crud->set_rules('gender', 'Gender', 'alpha_numeric_spaces|maxlength[2]');

		//Test Plan: Validation of DATE field
		$crud->set_rules('date_of_event', 'Event Date', 'callback_valid_date|required');

		$output = $crud->render();
		$this->events_output($output);
	}

	function events_output($output = null)
	{
		$this->load->view('events_view.php', $output);
	}

	//EVENT_HAS_VENUE table joins EVENTS table & VENUES table
	public function event_has_venue()
	{
		$this->load->view('top1_event_has_venue');
		$this->load->view('header1');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('event_has_venue');
		$crud->set_subject('venue of event');
		$crud->fields('eventID', 'venueID');
		$crud->required_fields('eventID', 'venueID');

		// One-to-Many relationships
		$crud->set_relation('eventID', 'events', '{eventID} - {event}');
		$crud->set_relation('venueID', 'venues', '{venueID} - {venue}');

		$crud->display_as('eventID', 'Event ID');
		$crud->display_as('venueID', 'Venue ID');

		$output = $crud->render();
		$this->event_has_venue_output($output);
	}

	function event_has_venue_output($output = null)
	{
		$this->load->view('event_has_venue_view.php', $output);
	}

	// OFFICIALS table
	public function officials($officialID=0)
	{
		$this->load->view('top1_officials');
		$this->load->view('header1');

		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('officials');
		$crud->set_subject('official');

		//$crud->columns('officialID','firstName', 'lastName', 'titleID', 'role', 'sportID', 'event', 'venue', 'entry_Log');
		/*$crud->columns('officialID','officialName', 'titleID', 'role', 'sportID', 'event', 'venue', 'entry_Log');
		$crud->fields('officialName',  'titleID', 'role', 'sportID', 'venue', 'event');
		$crud->required_fields('officialName',  'titleID', 'role', 'sportID');*/
		
		$crud->columns('officialID','officialName', 'titleID', 'role', 'sportID');
		$crud->fields('officialName',  'titleID', 'role', 'sportID');
		$crud->required_fields('officialName',  'titleID', 'role', 'sportID');
		
		//UAT Part 5 (2) Prevent registering the same official more than once
		$crud->unique_fields('officialName');
		
		//Many-to-one relationship to SPORTS table
		$crud->set_relation('sportID','sports','sport');

		//One-to-one relationship to TITLES  table
		$crud->set_relation('titleID', 'titles', '{titleID} - {title}');

		//Many-to-many relationship to ENTRYLOGS table
		//$crud->set_relation_n_n('entry_Log', 'official_has_entrylog', 'entryLogs', 'officialID', 'entryLogID', 'entryDate');

		//Many-to-many relationship to VENUES table
		$crud->set_relation_n_n('venue', 'official_has_venue', 'venues', 'officialID', 'venueID', 'venue');

		//Many-to-many relationship to EVENTS table
		$crud->set_relation_n_n('event', 'official_has_event', 'events', 'officialID', 'eventID', 'event');

		$crud->display_as('officialID', 'Official ID');
		$crud->display_as('officialName', 'Official Name');
		//$crud->display_as('lastName', 'Last Name');
		$crud->display_as('role', 'Role');
		$crud->display_as('sportID', 'Sport');

		$crud->display_as('titleID', 'Title');

		//UAT Part 2(2) Register official and Issue cards and Give authorisation
		$crud->add_action('Issue Card', ' ', 'main/cards/add');

		//UAT Part 2(2) AUTO
		//$crud->field_type('officialID', 'hidden', $officialID);
	
		//UAT Part 6 (5): Error messages are meaningful & helpful
		//Test Plan : Validation
		$crud->set_rules('officialName', 'Official Name', 'alpha_numeric_spaces|maxlength[45]|required');
		$crud->set_rules('role', 'Role', 'alpha_numeric_spaces|maxlength[45]|required');
	
		$output = $crud->render();
		$this->officials_output($output);
	}

	function officials_output($output = null)
	{
		$this->load->view('officials_view.php', $output);
	}

	// TITLES table
	public function titles()
	{
		$this->load->view('header1');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('titles');
		$crud->set_subject('title');
		$crud->fields('titleID', 'title');
		$crud->required_fields('titleID', 'title');

		$crud->display_as('titleID', 'Title ID');
		$crud->display_as('title', 'Tiltle');

		/*$output = $crud->render();
		$this->titles_output($output);*/
	}

	// AUTHORISE_CARD table
	public function authorise_card()
	{
		$this->load->view('top1_authorise_card');
		$this->load->view('header1');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('authorise_card');
		$crud->set_subject('authorisation');

		//$crud->add_action('Expire Card', ' ', 'main/action7');

		$crud->columns('statusID', 'officialID', 'cardID','authorisedID', 'sportID', 'eventID', 'venueID', 'valid_from', 'valid_to');
		$crud->fields( 'officialID','cardID', 'authorisedID', 'sportID', 'eventID', 'venueID', 'valid_from', 'valid_to');
		$crud->required_fields('officialID','cardID',  'authorisedID', 'sportID', 'venueID', 'valid_from', 'valid_to');

		// One-to-Many relationships
		$crud->set_relation('cardID', 'cards',  'Official ID: {officialID} - Card ID: {cardID} ');
		$crud->set_relation('officialID', 'officials', 'Official ID: {officialID} - {officialName} \nSport ID:{sportID}');
		$crud->set_relation('authorisedID', 'authorised', '{authorisedID} - {state}');
		$crud->set_relation('sportID', 'sports', '{sportID} - {sport}');
		$crud->set_relation('eventID', 'events', '{eventID} - ({gender}) {event} \n{date_of_event}');
		$crud->set_relation('venueID', 'venues', 'venue');

		$crud->display_as('statusID', 'Status ID');
		$crud->display_as('cardID', 'Card');
		$crud->display_as('officialID', 'Official');
		$crud->display_as('authorisedID', 'Authorised');
		$crud->display_as('sportID', 'Sport');
		$crud->display_as('eventID', 'Event');
		$crud->display_as('venueID', 'Venue');

		//UAT Part 6 (5): Error messages are meaningful & helpful
		//Test plan: Validation of  DATE fields
		$crud->set_rules('valid_from', 'Valid from', 'callback_valid_date|required');
		$crud->set_rules('valid_to', 'Valid to', 'callback_valid_date|required');

		//UAT Part 2(d) Default card state
		/*$crud->callback_add_field('authorisedID', function () {
			return '<input type="int" maxlength="1" value="1" name="authorisedID">';
		});
		*/
		//$this->form_validation->set_rules('authorisedID', 'Authorised ID', less_than_equal_to[1]);
	
	// CHANGED !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
		$state = $crud->getState();
		
		$output = $crud->render();
		
		if($state == 'add')
		{
		$js='<script>$(\'select[name="authorisedID"] option[value="1"]\').attr("selected", "selected");</script>';
		$output->output .= $js;	
		}
		$this->authorise_card_output($output);
	}

	function authorise_card_output($output = null)
	{
		$this->load->view('authorise_card_view.php', $output);
	}


//======================VAMOOS Tables: End==========================
	
	//UAT Part 2 (3): Ensure that the dates of validity for that card are set appropriately
	//UAT Part 6 (5): Error messages are meaningful & helpful
	//Test Plan: Validation of  DATE fields
	function valid_date($date)
	{
	    $date_format = 'd-m-Y'; /* use dashes - dd/mm/yyyy */

	    $date = trim($date);
	    /* UK dates and strtotime() don't work with slashes, 
	    so just do a quick replace */
	    $date = str_replace('/', '-', $date); 


	    $time = strtotime($date);

	    $is_valid = date($date_format, $time) == $date;

	    if($is_valid)
	    {
		return true;
	    }

	    /* not a valid date..return false */
	    $this->form_validation->set_message('valid_date', 'Date is not in correct format.');
	    return false;
	    
	}
	
	//Briefing sheet (page 4): functional requirement - automation of common actions
	//Index page of common actions
	public function action_nav()
	{

		//$this->load->view('top1');
		$this->load->view('top1_actionnav');	
		$this->load->view('header1');
		$this->load->view('action_nav_view');
		
	}

	//Briefing sheet (page 4): functional requirement - automation of common actions
	//Expire all cards for all officials of a sport: Athletics
	public function action1()
	{

		$this->load->view('top1_actionnav');
		$this->load->view('header1');
		$this->load->view('action1_view');
	}

	//Briefing sheet (page 4): functional requirement - automation of common actions
	//Expire all cards for all officials of a sport: Archery
	public function action2()
	{

		$this->load->view('top1_actionnav');
		$this->load->view('header1');
		$this->load->view('action2_view');
	}

	//Briefing sheet (page 4): functional requirement - automation of common actions
	//Expire all cards for all officials of a sport: Judo
	public function action3()
	{

		$this->load->view('top1_actionnav');
		$this->load->view('header1');
		$this->load->view('action3_view');
	}

	//Briefing sheet (page 4): functional requirement - automation of common actions
	//Expire all cards for all officials of a sport: Road cycling
	public function action4()
	{

		$this->load->view('top1_actionnav');
		$this->load->view('header1');
		$this->load->view('action4_view');
	}

	//Briefing sheet (page 4): functional requirement - automation of common actions
	//Expire all cards for all officials of a sport: Taekwondo
	public function action5()
	{

		$this->load->view('top1_actionnav');
		$this->load->view('header1');
		$this->load->view('action5_view');
	}

	//Briefing sheet (page 4): functional requirement - automation of common actions
	//Cancell all cards at the end of Olympics
	public function action6()
	{

		$this->load->view('top1_actionnav');
		$this->load->view('header1');
		$this->load->view('action6_view');
	}

	//UAT: Part 3 (2) - Expire cards for all officials when events are finished
	public function action7()
	{

		$this->load->view('top1_actionnav');
		$this->load->view('header1');
		$this->load->view('action7_view');
	}

	//UAT: Part 4  (4) & (5) - Allow/ Prevent a card to enter a venue because they have authorisation for a event
	public function access_check()
	{
		$this->load->view('top1_access_check');
		$this->load->view('header1');
		$this->load->view('access_check');
	}

	//UAT: Part 2 (6) - Expire a card for a team member
	//UAT: Part 2 (7) - Cancel authorisations for an expired card
	public function individual_card_status()
	{
		$this->load->view('top1_individual_card_status');
		$this->load->view('header1');
		$this->load->view('individual_card_status');
	}
	
	//UAT: Part 3(2) - Expire cards for all officialls when events are finished
	public function all_card_status()
	{
		$this->load->view('top1_all_card_status');
		$this->load->view('header1');
		$this->load->view('all_card_status');
	}
	
	//UAT: Part 5 (5) Extra functionality - Expire cards for all officialls  of ONE sport
	//UAT: Part 5 (5) Extra functionality - Cancel Authorisations for expired cards of ONE sport
	public function group_card_status()
	{
		$this->load->view('top1_group_card_status');
		$this->load->view('header1');
		$this->load->view('group_card_status');
	}
	
	
	//UAT Part 3 (1) Add authorisation for a  event after an event venue is changed
	public function adjust_venue()
	{
		$this->load->view('top1_adjust_venue');
		$this->load->view('header1');
		$this->load->view('adjust_venue');
	}
	
	//UAT Part 6 (6) Basic on-line help is available
	public function help()
	{
		$this->load->view('top1_help');
		$this->load->view('header1');
		$this->load->view('help');
	}
	
	/*public function querynav()
	{

		$this->load->view('top1');

		$this->load->view('header1');
		$this->load->view('querynav_view');
	}

	public function query1()
	{

		$this->load->view('top1');

		$this->load->view('header1');
		$this->load->view('query1_view');
	}

	public function query2()
	{

		$this->load->view('top1');

		$this->load->view('header1');
		$this->load->view('query2_view');
	}

	public function blank()
	{

		$this->load->view('top');

		$this->load->view('header');
		$this->load->view('blank_view');
	}
	*/

}
