CREATE DATABASE IF NOT EXISTS mhcdb;

CREATE TABLE IF NOT EXISTS psychologist(
	psychologistID int,
    typeof 			varchar(30),
	firstname		varchar(20),
    lastname		varchar(20),
	password		varchar(20),
    sex				varchar(10),
    age				smallint(3),
    telephone		int,
	email           varchar(60),
    fax				int,
    position 		varchar(20),
    speciality      varchar(20),
    address			varchar(30),
	building    	varchar(10),
    office_num		varchar(10),
    PRIMARY KEY(psychologistID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE table IF NOT EXISTS patient(
	patientID			int,
	psychologistID		int,
    serialnumber		int,
	telephone 			int,
	type				varchar(30),
	password 			varchar(15),
	haspsychologist 	varchar(10),
	firstname			varchar(20),
    lastname			varchar(20),
	email				varchar(60),
    dateofbirth			date,
    age					smallint(3),
    sex					varchar(10),
    citizenship     	varchar(20),
    address 			varchar(30),
    city				varchar(20),
    postalCode			int,
	period 				text,
	communicatevia 		varchar(10),
    sentby 				varchar(40),
    othersentby 		varchar(20),
    mainissue 			text,
    purposeoftherapy  	varchar(30),
    kindoftherapy	    varchar(30),
	previoustherapy 	varchar(10),
	previoustherapist 	text,
	nowtherapist 		text,
	comnowtherapistb 	varchar(10),
	numberofsessions 	int,
	firstcommunication 	date,	
    firstappoinment 	date,
    statuss 			varchar(20),
    levelofstudies 		varchar(20),
    yearofstudies 		int,
    departmentofstudies varchar(20),
    schoolofstudies 	varchar(20),
    erasmusstudent 		varchar(10),
    statusofstudies 	varchar(20),
	emergencyname 		varchar(30),
	emergencyrelation 	varchar(30),
	emergencynumber 	int,
    maritalstatus 		varchar(20),
    positionatHierarchy varchar(20),
    speciality      	varchar(20),
	building    		varchar(10),
    office_num			varchar(10),
	academiclevel 		varchar(20),
	fax					int,
	havejob 			varchar(10),
    job 				varchar(20),
	municipality 		varchar(20),
	otherinfo 			text,
	en4sign 			varchar(10),
	en5sign 			varchar(10),
	en13sign 			varchar(10),
	
	payee 				varchar(10),
	redflag 			varchar(10),
	parapona 			text,
	aksiologisi 		text,
	approved 			int,
    PRIMARY KEY(patientID),
	CONSTRAINT FOREIGN KEY (psychologistID) REFERENCES psychologist(psychologistID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE IF NOT EXISTS patienttimeline(
	timelineID 	int NOT NULL AUTO_INCREMENT,
    patientID 	int,
	day 		varchar(20),
    hour 		time,
    PRIMARY KEY(timelineID),
	CONSTRAINT FOREIGN KEY (patientID) REFERENCES patient(patientID)
    ON DELETE CASCADE
	ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
    
CREATE TABLE IF NOT EXISTS patientrelationships(
	relationID 		int NOT NULL AUTO_INCREMENT,
    patientID 		int,
	relation		varchar(20),
    name 			varchar(40),
	age				int(3),
	quality     	text,
	psychoproblem 	varchar(30),
    PRIMARY KEY(relationID),
	CONSTRAINT FOREIGN KEY (patientID) REFERENCES patient(patientID)
    ON DELETE CASCADE
	ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE IF NOT EXISTS patientmedication(
	medicationID 	int NOT NULL AUTO_INCREMENT,
    patientID 		int,
	nameof          varchar(30),
	dateof      	date,
	duration		varchar(30),
	doctor			varchar(40),
	comments		text,
    PRIMARY KEY(medicationID),
	CONSTRAINT FOREIGN KEY (patientID) REFERENCES patient(patientID)
    ON DELETE CASCADE
	ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;  

CREATE TABLE IF NOT EXISTS patientadditionaldata(
	addID 						int NOT NULL AUTO_INCREMENT,
	patientID 					int,
    academicproblems 			int,
    workingproblems 			int,
    loveaffair	 				int,
    familyrelation  			int,
    acquaintances 				int,
    socialcontacts 		 		int,
    socialisolation 	 		int,
    lonelyfeel 			 		int,
    fearofcloserelations 		int,
    difficultexpressfeelings 	int,
    difficulttoexpressopinion 	int,
    burstofanger 				int,
	jealous						int,
	recentdivorce				int,
	sadforrecentdivorce			int,
    sexuality 					int,
    sexualorientation 			int,
    pregnancy 					int,
    confusionaboutbelieves 		int,
    dontlikemyself 				int,
    senseofinferiority 			int,
    feelguilty 					int,
    sadness 					int,
    depressedmood 				int,
    feelofabsense 				int,
    reduceenergy 				int,
    badmoodforactivities 		int,
    badconcentration 			int,
    badmemory 					int,
    dificultdecide 				int,
    slowthinking 				int,
    badsleep 					int,
    stress 						int,
    intensity 					int,
    phobias 					int,
    obsessthinking 				int,
    insistrepeatthings 			int,
    problemwithdiet 			int,
    problemwithweight 			int,
    changesinapetite 			int,
    problemhealth 				int,
    physicaldisability 			int,
    braintrauma 				int,
    traumaticevent 				int,
    hyperactivity 				int,
    impelsivebehaviour 			int,
    problemalcohol 				int,
    problemdrugs 				int,
    problemgambling 			int,
    playinternetgames 			int,
    timemanagement 				int,
    abuse 						int,
    hearingvoices 				int,
    believewatchingme 			int,
    believemanipulatingme 		int,
    weirdbehavior 				int,
    financialproblems 			int,
    legalissues 				int,
    thinksuicide 				int,
    thinkkill 					int,
    other 						text,
    othergrade 					int,
    other1 						text,
    othergrade1 				int,
    
    PRIMARY KEY (addID),
	CONSTRAINT FOREIGN KEY (patientID) REFERENCES patient(patientID)
    ON DELETE CASCADE
	ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


  
    


CREATE TABLE IF NOT EXISTS Appointment(
	appointmentID 		int NOT NULL AUTO_INCREMENT,
	patientID 			int,
    psychologistID 		int,
	nameofappointment 	varchar(30),
	subject 			text,
    Typeof 				varchar(20),
    dateof 				date,
    timeof 				time,
    length 				int,
    building 			varchar(20),
    room 				varchar(20),
    codeof 				enum('Personal','Counseling'),
    attendance 			enum('Scheduled','Attended','not Attended'),
    comments 			text,
    RemindClientSMS 	varchar(10),
    RemindClientEmail 	varchar(10),
    RemindPsychoSMS 	varchar(10),
    RemindPsychoEmail 	varchar(10),
    ReminderTimeBefore 	time,
    PRIMARY KEY(appointmentID),
	CONSTRAINT FOREIGN KEY (patientID) REFERENCES patient(patientID)
    ON DELETE CASCADE
	ON UPDATE CASCADE,
	CONSTRAINT FOREIGN KEY (psychologistID) REFERENCES psychologist(psychologistID)
    ON DELETE CASCADE
	ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
 
CREATE TABLE IF NOT EXISTS CaseNote(
	caseID 					int NOT NULL AUTO_INCREMENT,
    appointmentID 			int,
	clinicalobservations 	text,
	sessioncontent 			text,
	otherobservations 		text,
	goalsfornextappoinment 	text,
    typeof 					varchar(20),
    dateof 					date,
    timeof 					time,
    Signed 					varchar(10),
    Note 					text,
    PRIMARY KEY(caseID),
	CONSTRAINT FOREIGN KEY (appointmentID) REFERENCES Appointment(appointmentID)
    ON DELETE CASCADE
	ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

Create table IF NOT EXISTS Medlog(
	medID 				int NOT NULL AUTO_INCREMENT,
	patientID 			int,
	feelaboutstudies 	text,
	job					varchar(30),
    jobtime 			varchar(30),
    jobdutys 			varchar(30),
    jobstress 			varchar(20),
    jobprevious 		text,
    relationshipin 		text,
    relationshipinfo 	text,
    relationshipname 	text,
	relationshipjob 	text,
    children 			text,
    staywith 			text,
	staydificulties 	text,
    familysynthesis 	text,
    support 			text,
    economicstatus 		text,
    economichelp 		varchar(10),
    economichelp1 		text,
    legalissues 		varchar(10),
    legalissues1 		text,
    healthissues 		text,
    healthconsernes 	text,
    doctor 				varchar(10),
    doctorcontacts 		text,
    medicines 			varchar(10),
    medicines1 			text,
    generalhealth 		text,
    smoking 			varchar(10),
    smoking1 			text,
    alcohol 			varchar(10),
    alcohol1 			text,
    drugs 				varchar(10),
    drugs1 				text,
    marihuanafrequency 	int,
    luckygames 			varchar(10),
    luckygames1 		text,
    betmore 			varchar(10),
    speakaboutlucky 	varchar(10),
    childlife 			text,
    childlifeproblems 	text,
    militarylife 		text,
    familyproblems 		text,
    trauma 				text,	
    psychosupport 		varchar(10),
    psychosupport1 		text,
    psychodiagnosis 	varchar(10),
    psychodiagnosis1 	text,
    disability 			varchar(10),
    disability1 		text,
    suicideprothesis 	varchar(10),
    suicideprothesis1 	text,
    violenceprothesis 	varchar(10),
    violenceprothesis1 	text,
    violence 			varchar(10),
    violence1 			text,
    feelfortherapy 		text,
    otherseriousinfo 	text,
    reasonsfortherapy 	text,
	mainproblem 		text,
	historyofproblem 	text, 
	anxietyfactors	 	text,	
	specialrequests 	text,
	behaviour 			text,
	gnosticfunction 	text,
	mood 				text,
	psychometricresult 	text,
	clinicalimpression 	text,
	psychologicalfunc 	varchar(20),
	professionacademicfunc varchar(20),
	socialfunc       	varchar(20),
	autofix 			varchar(20),
	therapyfactors 		text,
	therapysuggestions 	text,
	additionalevaluation text,
	initialtherapyprogram text,
	signed 				varchar(10),
	datecompleted 		date,
	PRIMARY KEY(medID),
	CONSTRAINT FOREIGN KEY (patientID) REFERENCES patient(patientID)
    ON DELETE CASCADE
	ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE IF NOT EXISTS Diagnosis( 
 diagnosisID	int NOT NULL AUTO_INCREMENT,
 medID 			int,
 dsmaxis1 		text,
 dsmaxis2 		text,
 dsmaxis3 		text,
 dsmaxis4 		text,
 dsmaxis5 		text,
 dateof 		date,
 PRIMARY KEY(diagnosisID),
 CONSTRAINT FOREIGN KEY (medID) REFERENCES Medlog(medID)
    ON DELETE CASCADE
	ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE IF NOT EXISTS ComLog(
ComID int NOT NULL AUTO_INCREMENT,
patientID 	int,
typeof 		varchar(20),
typeofcall  varchar(20),
tel 		int,
email 		varchar(50),
dateofcall 	date,
timeofcall 	time,
nameofcaller varchar(30),
lastnameofcaller varchar(30),
roleofcaller varchar(30),
nameofcallee varchar(30),
lastnameofcallee varchar(30),
roleofcallee varchar(30),
subject text,
description text,
handle text,
othercomments text,
signedexternal varchar(10),

nameofprof varchar(30),
lastnameofprof varchar(30),
addressofprof varchar(30),
cityofprof varchar(30),
telofprof int,
emailofprof varchar(50),
purposeofinfo text,
infototransfer text,
timeofexpire varchar(30),
signedinfo varchar(10),
PRIMARY KEY(comID),
CONSTRAINT FOREIGN KEY (patientID) REFERENCES patient(patientID)
    ON DELETE CASCADE
	ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE IF NOT EXISTS TerminationEvaluation(
	terminationID 	int NOT NULL AUTO_INCREMENT,
    patientID 		int,
	dateended 			date,
	whyterminate 		text,
	therapyend          text,
	infoterminate		text,
	epsychologicalfunc 	varchar(20),
	eprofessionacademicfunc varchar(20),
	esocialfunc       	varchar(20),
	eautofix 			varchar(20),
	
	q1 smallint,
	q2 smallint,
	q3 smallint,
	q4 smallint,
	q5 smallint,
	q6 smallint,
	q7 smallint,
	q8 smallint,
	q9 smallint,
	q10 smallint,
	q11 smallint,
	q12 smallint,
	q13 smallint,
	q14 smallint,
	q15 smallint,
	q16 smallint,
	q17 smallint,
	q18 smallint,
	q19 smallint,
	q20 smallint,
	q21 smallint,
	helpful text,
	negative text,
	sugestions text,
	other text,
	whyterminate1 text,
    PRIMARY KEY(terminationID),
	CONSTRAINT FOREIGN KEY (patientID) REFERENCES patient(patientID)
    ON DELETE CASCADE
	ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE IF NOT EXISTS Complaints(
	complaintID 	int NOT NULL AUTO_INCREMENT,
    patientID 		int,
	dateof date,
	people text,
	description text,
	affirmation text,
    PRIMARY KEY(complaintID),
	CONSTRAINT FOREIGN KEY (patientID) REFERENCES patient(patientID)
    ON DELETE CASCADE
	ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

