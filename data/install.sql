```sql
Drop table if exists NuclearIncidents;
Drop table if exists JapanNuclearNews;
Drop table if exists CountriesReactions;
Drop table if exists Consequnces;
Drop table if exists Incidents;
Drop table if exists RadiationLevels;
Drop table if exists EnvironmentalImpact;
Drop table if exists HealthEffects;
Drop table if exists NuclearFacilities;
Drop table if exists Regulations;
Drop table if exists EmergencyResponse;
Drop table if exists MonitoringData;
Drop table if exists DiffusionLevel;
Drop table if exists InternationalLaw;
Drop table if exists MainIncidents;
Drop table if exists Symptom;
Drop table if exists Consequences;
Drop table if exists CountriesReactionsToEvents;
Drop table if exists PublicOpinionSurvey;
CREATE TABLE JapanNuclearNews
(
    news_id      INT AUTO_INCREMENT PRIMARY KEY,
    event_date   DATE,
    location     VARCHAR(255),
    headline     VARCHAR(255),
    news_content TEXT
);
INSERT INTO JapanNuclearNews (event_date, location, headline, news_content)
VALUES ('2022-08-24', 'Fukushima Daiichi Nuclear Power Station',
        'Tokyo Electric Power Company Initiates Fukushima Nuclear Contaminated Water Discharge Plan',
        'On August 24th, Tokyo Electric Power Company officially initiated the Fukushima Daiichi Nuclear Power Station\'s plan to discharge contaminated water into the Pacific Ocean. Over twenty thousand tons of nuclear contaminated water have been discharged through three rounds so far. Local residents in Fukushima strongly oppose this action, expressing concerns about its impact on their lives and the environment.'),
       ('2022-08-24', 'Storage Tanks', 'TEPCO Acknowledges Excessive Radioactive Content in Nuclear Wastewater',
        'TEPCO has admitted that about 66% of the nuclear contaminated water in storage tanks currently exceeds permissible levels of radioactive materials. Despite claims by the Japanese government and TEPCO that the treated nuclear wastewater is harmless, the actual situation has raised concerns among the public and the international community.'),
       ('2024-02-01', 'Fukushima Daiichi Nuclear Power Station',
        'Fourth Round of Fukushima Daiichi Nuclear Power Station Nuclear Wastewater Discharge Set to Begin in February 2024',
        'It is anticipated that a total of 7,800 tons of wastewater will be discharged during this phase, with a cumulative total of 1.2 million tons of Fukushima nuclear waste slated to be discharged into the Pacific Ocean over the next 30 years.'),
       (NULL, NULL, 'International Concerns about Japan\'s Nuclear Wastewater Discharge Plan',
        'Several countries and international organizations have expressed concerns regarding the Japanese government\'s decision, citing potential long-term impacts on marine ecosystems and human health. Additionally, some have criticized Western media for inadequate coverage of this event.');


CREATE TABLE CountriesReactions
(
    reaction_id          INT AUTO_INCREMENT PRIMARY KEY,
    country_name         VARCHAR(255),
    reaction_date        DATE,
    reaction_description TEXT
);

INSERT INTO CountriesReactions (country_name, reaction_date, reaction_description)
VALUES ('China', '2023-08-24',
        'The Chinese government strongly opposes this action and has suspended imports of Japanese-origin water products since August 24th. China has also called for a comprehensive investigation into the nuclear wastewater discharge to ensure nuclear safety and environmental security.'),
       ('South Korea', '2023-08-25',
        'The South Korean government has also expressed concerns about Japan\'s nuclear wastewater discharge and requested detailed information from the Japanese government to safeguard public health and safety.'),
       ('United States', '2023-08-26',
        'While expressing concern about the matter, the U.S. government appears to be cautious in its stance towards Japan\'s handling and discharge of nuclear wastewater, without explicitly opposing it.'),
       ('International Community', '2023-08-27',
        'The International Atomic Energy Agency (IAEA) has dispatched an expert team to Japan to assess the nuclear wastewater treatment and discharge process. Many countries and international organizations have expressed concerns about Japan\'s decision, citing potential long-term impacts on marine ecosystems and human health.');


CREATE TABLE Consequences
(
    consequence_id   INT AUTO_INCREMENT PRIMARY KEY,
    consequence_type VARCHAR(100),
    description      TEXT
);

INSERT INTO Consequences (consequence_type, description)
VALUES ('Impact on Marine Ecosystems',
        'The discharged nuclear wastewater contains radioactive substances such as cesium, strontium, and tritium, which can enter the marine food chain, causing direct harm to marine life. This could result in the death of marine organisms and the disruption of ecosystems, leading to significant losses in fisheries and marine ecotourism.'),
       ('Impact on Human Health',
        'Once radioactive substances enter the food chain, humans can be exposed to them through food and water consumption, leading to radiation risks. Long-term exposure to nuclear radiation can potentially cause health issues such as cancer, genetic mutations, and reproductive problems. This poses significant health risks to residents in Japan and its neighboring regions, potentially affecting the quality of life for future generations.'),
       ('Damage to International Reputation',
        'Japan, as a highly developed country, has enjoyed a reputation for its technological advancements and commitment to environmental protection. However, the decision to discharge nuclear wastewater may raise doubts in the international community regarding Japan\'s environmental commitments, potentially damaging its reputation.'),
       ('Political and Economic Implications in the Region',
        'This action could exacerbate tensions between Japan and neighboring countries, especially China and South Korea. Additionally, it may impact trade and economic cooperation with these nations.'),
       ('Uncertainty Regarding Long-term Environmental Impact',
        'Due to the uncertain long-term environmental effects of radioactive substances, particularly on marine ecosystems and human health, there is a level of uncertainty surrounding this issue.');



CREATE TABLE NuclearIncidents
(
    incident_id            INT AUTO_INCREMENT PRIMARY KEY,
    event_date             DATE,
    location               VARCHAR(255),
    incident_type          VARCHAR(100),
    description            TEXT,
    impact_on_environment  TEXT,
    impact_on_human_health TEXT,
    international_response TEXT
);

INSERT INTO NuclearIncidents (event_date, location, incident_type, description, impact_on_environment,
                              impact_on_human_health, international_response)
VALUES ('1986-04-26', 'Chernobyl, Ukraine', 'Nuclear Reactor Explosion',
        'In 1986, a nuclear reactor explosion occurred at the Chernobyl Nuclear Power Plant in the Soviet Union\'s Ukraine. It resulted in a massive release of radioactive materials, making it the worst nuclear power plant accident in history. It was classified as a Level 7 event on the International Nuclear Event Scale (INES). This accident had a significant impact on the Soviet Union and neighboring countries, particularly with approximately 60% of Belarus\' territory being contaminated by radioactive dust.',
        'Severe damage to the environment, widespread contamination of land and water bodies.',
        'Significant impact on human health, including radiation-related illnesses and deaths.',
        'International response included assistance from multiple countries and organizations.');

INSERT INTO NuclearIncidents (event_date, location, incident_type, description, impact_on_environment,
                              impact_on_human_health, international_response)
VALUES ('2011-03-11', 'Fukushima, Japan', 'Nuclear Accident',
        'In 2011, a severe nuclear accident occurred at the Fukushima Daiichi Nuclear Power Plant in Japan\'s northeastern region. It was triggered by a powerful earthquake and subsequent tsunami in the nearby Pacific Ocean. This accident was also classified as a Level 7 event on the International Nuclear Event Scale (INES), making it one of the only two Level 7 events in history, alongside the Chernobyl disaster.',
        'Release of radioactive materials into the environment, contamination of air and water.',
        'Radiation exposure and related health concerns among the affected population.',
        'International response included assistance and monitoring by various countries and organizations.');

INSERT INTO NuclearIncidents (event_date, location, incident_type, description, impact_on_environment,
                              impact_on_human_health, international_response)
VALUES ('1979-03-28', 'Three Mile Island, Pennsylvania, USA', 'Nuclear Accident',
        'In 1979, a partial meltdown accident took place at the Three Mile Island nuclear power plant in Pennsylvania, United States. While it did not result in direct fatalities or significant health impacts, it had a substantial effect on the nuclear power industry in the United States and globally.',
        'Limited environmental contamination within the facility.', 'Minimal direct impact on human health.',
        'Received attention from the U.S. government and regulatory authorities.');

INSERT INTO NuclearIncidents (event_date, location, incident_type, description, impact_on_environment,
                              impact_on_human_health, international_response)
VALUES ('1957-09-29', 'Kyshtym, Soviet Union', 'Nuclear Waste Storage Accident',
        'In 1957, a severe nuclear waste storage accident occurred near the city of Kyshtym in the Soviet Union. It led to a significant release of radioactive materials. This incident was kept secret by the Soviet government for an extended period and was only disclosed in the late 1980s.',
        'Contamination of nearby areas and rivers.',
        'Long-term health impacts on local residents due to radiation exposure.',
        'Information about the incident was initially suppressed, with limited international response.');



CREATE TABLE Incidents
(
    incident_id       INT AUTO_INCREMENT PRIMARY KEY,
    incident_date     DATE,
    location          VARCHAR(255),
    impact_range      VARCHAR(255),
    incident_level    VARCHAR(50),
    description       TEXT,
    response_measures TEXT
);

INSERT INTO Incidents (incident_date, location, impact_range, incident_level, description, response_measures)
VALUES ('2022-01-15', 'Fukushima, Japan', 'Local area', 'Level 2', 'Minor radioactive leak from a storage tank',
        'Evacuation of nearby residents, containment efforts initiated.'),
       ('2019-07-28', 'Chernobyl, Ukraine', 'Regional', 'Level 7', 'Chernobyl nuclear power plant explosion',
        'Immediate evacuation of the nearby city, international assistance requested.'),
       ('2018-03-10', 'Sellafield, UK', 'Local area', 'Level 3', 'Chemical fire at a nuclear facility',
        'Emergency response team deployed, containment and cleanup operations.'),
       ('2015-11-20', 'Tokai, Japan', 'Local area', 'Level 2', 'Radioactive material spill during transportation',
        'Immediate cleanup efforts, radiation monitoring in the area.'),
       ('2014-06-05', 'Hanford, USA', 'Local area', 'Level 2', 'Underground storage tank leakage',
        'Isolation of the affected area, initiation of tank repairs.'),
       ('2012-09-18', 'Tomsk, Russia', 'Regional', 'Level 4', 'Nuclear facility cooling system failure',
        'Emergency shutdown of the facility, cooling system repair work.'),
       ('2010-12-02', 'Windscale, UK', 'Local area', 'Level 3', 'Nuclear reactor overheating incident',
        'Cooling system restored, assessment of radioactive release.'),
       ('2008-04-14', 'Seversk, Russia', 'Local area', 'Level 2', 'Contaminated water leak at a nuclear site',
        'Immediate containment and cleanup operation.'),
       ('2006-02-08', 'Savannah River, USA', 'Local area', 'Level 2', 'Radioactive material exposure incident',
        'Medical evaluation of affected personnel, decontamination procedures.'),
       ('2003-10-17', 'Tsuruga, Japan', 'Local area', 'Level 2', 'Unplanned nuclear reactor shutdown',
        'Investigation into the cause, safety improvements implemented.');



CREATE TABLE DiffusionLevel
(
    level_id            INT AUTO_INCREMENT PRIMARY KEY,
    region              VARCHAR(255),
    radiation_dose_rate DECIMAL(10, 2),
    radiation_source    VARCHAR(255),
    monitoring_time     DATETIME
);

INSERT INTO DiffusionLevel (region, radiation_dose_rate, radiation_source, monitoring_time)
VALUES ('Tokyo, Japan', 0.12, 'Background radiation', '2022-01-15 08:00:00'),
       ('Chernobyl, Ukraine', 125.78, 'Chernobyl Exclusion Zone', '2022-01-15 12:30:00'),
       ('Los Angeles, USA', 0.10, 'Background radiation', '2022-01-15 14:15:00'),
       ('Sellafield, UK', 0.25, 'Nuclear facility vicinity', '2022-01-15 10:45:00'),
       ('Savannah River, USA', 0.18, 'Nuclear research facility', '2022-01-15 16:20:00'),
       ('Seversk, Russia', 0.15, 'Nearby nuclear complex', '2022-01-15 11:10:00'),
       ('Fukushima, Japan', 0.30, 'Fukushima Daiichi plant', '2022-01-15 09:55:00'),
       ('Paris, France', 0.08, 'Background radiation', '2022-01-15 13:40:00'),
       ('Beijing, China', 0.09, 'Background radiation', '2022-01-15 15:05:00'),
       ('Sydney, Australia', 0.11, 'Background radiation', '2022-01-15 17:30:00');


CREATE TABLE EnvironmentalImpact
(
    impact_id          INT AUTO_INCREMENT PRIMARY KEY,
    impact_type        VARCHAR(50),
    location           VARCHAR(255),
    impact_description TEXT,
    environmental_data TEXT
);

INSERT INTO EnvironmentalImpact (impact_type, location, impact_description, environmental_data)
VALUES ('Marine Ecosystem', 'Pacific Ocean', 'Impact on marine life due to radioactive contamination.',
        'Decrease in fish population, mutations in marine organisms.'),
       ('Soil Contamination', 'Fukushima, Japan', 'Contamination of soil with radioactive materials.',
        'Increased levels of cesium and strontium in soil, reduced agricultural productivity.'),
       ('Biodiversity', 'Chernobyl Exclusion Zone', 'Impact on biodiversity in the Chernobyl area.',
        'Decrease in the number of certain species, increased population of others.'),
       ('Air Quality', 'Los Angeles, USA', 'Impact on air quality due to nuclear facility emissions.',
        'Increase in air pollutants, impact on respiratory health.'),
       ('Water Pollution', 'Sellafield, UK', 'Contamination of water bodies near nuclear facilities.',
        'Elevated levels of radioactive isotopes in water, harm to aquatic life.'),
       ('Ecosystem Disruption', 'Savannah River, USA',
        'Disruption of local ecosystems near a nuclear research facility.',
        'Altered habitats, changes in species composition.'),
       ('Groundwater Contamination', 'Seversk, Russia', 'Contamination of groundwater near a nuclear complex.',
        'Presence of radioactive materials in groundwater, potential health risks.'),
       ('Vegetation Impact', 'Fukushima, Japan', 'Impact on plant life due to radiation exposure.',
        'Stunted growth, mutations in plants.'),
       ('Urban Environment', 'Tokyo, Japan', 'Impact on the urban environment due to radiation concerns.',
        'Public anxiety, food safety concerns.');

CREATE TABLE HealthEffects
(
    effect_id             INT AUTO_INCREMENT PRIMARY KEY,
    health_condition      VARCHAR(100),
    radiation_exposure    DECIMAL(10, 2),
    cancer_incidence_rate DECIMAL(5, 2),
    genetic_mutations     INT,
    statistics            TEXT
);

INSERT INTO HealthEffects (health_condition, radiation_exposure, cancer_incidence_rate, genetic_mutations, statistics)
VALUES ('Thyroid Cancer', 0.15, 3.5, 25, 'Higher incidence rate among exposed population.'),
       ('Leukemia', 0.25, 5.2, 18, 'Increased cases of leukemia in affected areas.'),
       ('Lung Cancer', 0.10, 2.8, 15, 'Elevated risk of lung cancer due to radiation exposure.'),
       ('Birth Defects', 0.30, 4.0, 30, 'Higher rate of birth defects among newborns in contaminated regions.'),
       ('Genetic Disorders', 0.20, 3.0, 22, 'Increased genetic mutations and inherited disorders.'),
       ('Thyroid Abnormalities', 0.12, 2.0, 12,
        'Higher occurrence of thyroid abnormalities among exposed individuals.'),
       ('Skin Diseases', 0.18, 3.7, 28, 'Increased cases of skin diseases due to radiation exposure.'),
       ('Respiratory Issues', 0.08, 1.5, 10, 'Higher incidence of respiratory problems in affected populations.'),
       ('Cataracts', 0.10, 1.8, 14, 'Elevated risk of cataracts among those exposed to radiation.'),
       ('Cardiovascular Diseases', 0.14, 2.5, 20, 'Increased cases of heart diseases linked to radiation exposure.');



CREATE TABLE NuclearFacilities
(
    facility_id              INT AUTO_INCREMENT PRIMARY KEY,
    facility_name            VARCHAR(255),
    facility_type            VARCHAR(100),
    location                 VARCHAR(255),
    operational_status       VARCHAR(50),
    technical_specifications TEXT,
    safety_measures          TEXT
);

INSERT INTO NuclearFacilities (facility_name, facility_type, location, operational_status, technical_specifications,
                               safety_measures)
VALUES ('Tokyo Nuclear Power Plant', 'Nuclear Power Plant', 'Tokyo, Japan', 'Operational',
        'Technical specifications: 1000 MW capacity, pressurized water reactor.',
        'Safety measures: Regular safety drills and emergency response protocols.'),
       ('Osaka Nuclear Facility', 'Research Facility', 'Osaka, Japan', 'Operational',
        'Technical specifications: Research and development on advanced nuclear technologies.',
        'Safety measures: Strict access control and radiation monitoring.'),
       ('Fukushima Nuclear Reactor', 'Nuclear Power Plant', 'Fukushima, Japan', 'Shutdown',
        'Technical specifications: Boiling water reactor with a 900 MW capacity.',
        'Safety measures: Ongoing decommissioning and decontamination efforts.'),
       ('Kyoto Nuclear Research Center', 'Research Facility', 'Kyoto, Japan', 'Operational',
        'Technical specifications: Conducts nuclear physics research and experiments.',
        'Safety measures: Stringent safety protocols and containment measures.'),
       ('Sendai Nuclear Testing Site', 'Testing Facility', 'Sendai, Japan', 'Operational',
        'Technical specifications: Used for nuclear testing and experiments.',
        'Safety measures: Restricted access and controlled testing procedures.'),
       ('Hiroshima Nuclear Facility', 'Research Facility', 'Hiroshima, Japan', 'Operational',
        'Technical specifications: Focuses on nuclear medicine and radiopharmaceuticals research.',
        'Safety measures: Radiation safety training and protective gear.'),
       ('Nagasaki Nuclear Power Plant', 'Nuclear Power Plant', 'Nagasaki, Japan', 'Operational',
        'Technical specifications: Pressurized heavy water reactor with 800 MW capacity.',
        'Safety measures: Regular inspections and safety drills.'),
       ('Okinawa Nuclear Research Center', 'Research Facility', 'Okinawa, Japan', 'Operational',
        'Technical specifications: Conducts marine and environmental research.',
        'Safety measures: Radiation monitoring and environmental impact studies.'),
       ('Sapporo Nuclear Laboratory', 'Research Facility', 'Sapporo, Japan', 'Operational',
        'Technical specifications: Engaged in nuclear physics and materials research.',
        'Safety measures: Laboratory safety protocols and waste disposal.'),
       ('Nagoya Nuclear Storage Facility', 'Storage Facility', 'Nagoya, Japan', 'Operational',
        'Technical specifications: Stores nuclear materials and waste securely.',
        'Safety measures: Robust security measures and waste containment procedures.');



CREATE TABLE Regulations
(
    regulation_id    INT AUTO_INCREMENT PRIMARY KEY,
    regulation_name  VARCHAR(255),
    publication_date DATE,
    description      TEXT,
    applicable_scope VARCHAR(255)
);


INSERT INTO Regulations (regulation_name, publication_date, description, applicable_scope)
VALUES ('Nuclear Safety Act', '2023-01-15',
        'This act outlines safety regulations for nuclear facilities and activities.', 'National'),
       ('Environmental Protection Regulation', '2022-07-20',
        'These regulations set standards for environmental protection related to nuclear activities.', 'National'),
       ('Radiation Monitoring Guidelines', '2023-03-10',
        'Guidelines for monitoring radiation levels in the vicinity of nuclear facilities.', 'National'),
       ('Nuclear Waste Disposal Regulations', '2022-11-30',
        'Regulations for the safe disposal of nuclear waste materials.', 'National'),
       ('International Atomic Energy Agency (IAEA) Standards', '2022-05-05',
        'Standards set by the IAEA for nuclear safety and security.', 'International'),
       ('Nuclear Facility Licensing Rules', '2023-02-28', 'Rules governing the licensing of nuclear facilities.',
        'National'),
       ('Nuclear Research Ethics Code', '2022-09-12', 'Ethical code for conducting nuclear research and experiments.',
        'National'),
       ('Emergency Response Plan Guidelines', '2023-04-18',
        'Guidelines for emergency response plans for nuclear accidents.', 'National'),
       ('Nuclear Material Transportation Regulations', '2022-08-25',
        'Regulations for the safe transportation of nuclear materials.', 'National'),
       ('Nuclear Security Protocols', '2022-12-10', 'Security protocols for nuclear facilities and materials.',
        'National');



CREATE TABLE EmergencyResponse
(
    response_id         INT AUTO_INCREMENT PRIMARY KEY,
    event_id            INT,
    response_plan       TEXT,
    response_team       VARCHAR(255),
    resource_allocation TEXT,
    contact_information TEXT
);

INSERT INTO EmergencyResponse (event_id, response_plan, response_team, resource_allocation, contact_information)
VALUES (1, 'Activate the emergency response plan for a nuclear accident.', 'Emergency Response Team A',
        'Allocate resources as per the response plan.', 'Emergency Contact: John Doe (123-456-7890)'),
       (2, 'Implement the evacuation plan for a nearby nuclear facility incident.', 'Emergency Response Team B',
        'Mobilize emergency personnel and equipment.', 'Emergency Contact: Jane Smith (987-654-3210)'),
       (3, 'Respond to a radiation leak incident at a research facility.', 'Radiation Response Team',
        'Secure the affected area and initiate decontamination procedures.',
        'Emergency Contact: Dr. James Wilson (555-123-4567)'),
       (4, 'Handle a nuclear materials transportation accident.', 'Transportation Response Team',
        'Coordinate with local authorities and ensure the safety of the public.',
        'Emergency Contact: Transportation Control Center (800-555-1234)'),
       (5, 'Address a security breach at a nuclear power plant.', 'Security Response Team',
        'Engage in security protocols and collaborate with law enforcement.',
        'Emergency Contact: Security Control Center (911)'),
       (6, 'Manage a nuclear waste disposal facility incident.', 'Waste Facility Response Team',
        'Contain the incident and minimize environmental impact.',
        'Emergency Contact: Environmental Protection Agency (EPA)'),
       (7, 'Respond to a nuclear research lab accident.', 'Research Lab Response Team',
        'Isolate the affected area and provide medical assistance to affected personnel.',
        'Emergency Contact: Lab Director (777-888-9999)'),
       (8, 'React to a radiation exposure incident in a community.', 'Community Response Team',
        'Provide medical care to affected individuals and monitor radiation levels.',
        'Emergency Contact: Local Health Department (123-987-6543)'),
       (9, 'Handle a nuclear safety breach at a nuclear facility.', 'Safety Response Team',
        'Secure the facility and investigate the breach.',
        'Emergency Contact: Facility Security Office (555-555-5555)'),
       (10, 'Respond to a nuclear incident involving multiple facilities.', 'Multi-Facility Response Team',
        'Coordinate resources and communication among affected facilities.',
        'Emergency Contact: Incident Command Center (911)');



CREATE TABLE MonitoringData
(
    data_id              INT AUTO_INCREMENT PRIMARY KEY,
    event_id             INT,
    monitoring_station   VARCHAR(255),
    monitoring_time      DATETIME,
    radiation_level      DECIMAL(10, 2),
    environmental_impact TEXT,
    weather_data         TEXT
);



INSERT INTO MonitoringData (event_id, monitoring_station, monitoring_time, radiation_level, environmental_impact,
                            weather_data)
VALUES (1, 'Station - Tokyo', '2023-08-15 09:00:00', 0.25, 'No significant environmental impact observed.',
        'Clear skies and calm weather conditions.'),
       (2, 'Station - Osaka', '2023-08-15 09:30:00', 0.18, 'Minimal impact on the environment.',
        'Partly cloudy with light rain showers.'),
       (3, 'Station - Fukushima', '2023-08-15 10:00:00', 0.30, 'Localized impact on aquatic life.',
        'Overcast skies with scattered thunderstorms.'),
       (4, 'Station - Kyoto', '2023-08-15 10:30:00', 0.12, 'No significant environmental impact observed.',
        'Sunny and warm conditions.'),
       (5, 'Station - Sendai', '2023-08-15 11:00:00', 0.22, 'Minimal impact on soil quality.',
        'Partly cloudy with a light breeze.'),
       (6, 'Station - Hiroshima', '2023-08-15 11:30:00', 0.28, 'Localized impact on vegetation.',
        'Partly cloudy with occasional showers.'),
       (7, 'Station - Nagasaki', '2023-08-15 12:00:00', 0.20, 'No significant environmental impact observed.',
        'Clear skies and calm weather conditions.'),
       (8, 'Station - Okinawa', '2023-08-15 12:30:00', 0.15, 'Minimal impact on marine life.',
        'Partly cloudy with a moderate breeze.'),
       (9, 'Station - Sapporo', '2023-08-15 13:00:00', 0.32, 'Localized impact on wildlife habitat.',
        'Overcast skies with occasional rain.'),
       (10, 'Station - Nagoya', '2023-08-15 13:30:00', 0.14, 'No significant environmental impact observed.',
        'Sunny with a few clouds.');



CREATE TABLE RadiationLevels
(
    level_id            INT AUTO_INCREMENT PRIMARY KEY,
    latitude            DECIMAL(10, 6),
    longitude           DECIMAL(10, 6),
    radiation_dose_rate DECIMAL(10, 2),
    radiation_source    VARCHAR(255),
    monitoring_time     DATETIME
);

INSERT INTO RadiationLevels (latitude, longitude, radiation_dose_rate, radiation_source, monitoring_time)
VALUES (37.7749, 140.4674, 0.25, 'Fukushima Daiichi plant', '2023-11-01 08:23:45'),
       (35.6895, 139.6917, 0.22, 'Fukushima Daiichi plant', '2023-11-01 09:45:12'),
       (34.6937, 135.5022, 0.28, 'Fukushima Daiichi plant', '2023-11-01 11:18:30'),
       (36.2048, 138.2529, 0.24, 'Fukushima Daiichi plant', '2023-11-01 13:42:15'),
       (33.5904, 130.4017, 0.30, 'Fukushima Daiichi plant', '2023-11-01 15:09:37'),
       (32.6204, 129.7600, 0.18, 'Fukushima Daiichi plant', '2023-11-02 07:56:24'),
       (35.0116, 135.7681, 0.21, 'Fukushima Daiichi plant', '2023-11-02 10:27:50'),
       (31.9686, 130.9900, 0.26, 'Fukushima Daiichi plant', '2023-11-02 12:55:18'),
       (35.4437, 139.6380, 0.23, 'Fukushima Daiichi plant', '2023-11-02 14:37:42'),
       (35.6895, 139.6917, 0.32, 'Fukushima Daiichi plant', '2023-11-04 09:12:30'),
       (34.6937, 135.5022, 0.19, 'Fukushima Daiichi plant', '2023-11-04 11:45:54'),
       (36.2048, 138.2529, 0.27, 'Fukushima Daiichi plant', '2023-11-04 14:18:21'),
       (33.5904, 130.4017, 0.25, 'Fukushima Daiichi plant', '2023-11-04 16:42:45'),
       (32.6204, 129.7600, 0.31, 'Fukushima Daiichi plant', '2023-11-05 08:56:12'),
       (35.0116, 135.7681, 0.23, 'Fukushima Daiichi plant', '2023-11-05 10:27:38'),
       (31.9686, 130.9900, 0.28, 'Fukushima Daiichi plant', '2023-11-05 12:55:04'),
       (35.4437, 139.6380, 0.20, 'Fukushima Daiichi plant', '2023-11-05 14:37:29'),
       (38.2682, 140.8694, 0.26, 'Fukushima Daiichi plant', '2023-11-06 16:20:53'),
       (39.9334, 140.0754, 0.22, 'Fukushima Daiichi plant', '2023-11-06 18:44:18'),
       (37.7749, 140.4674, 0.29, 'Fukushima Daiichi plant', '2023-11-03 16:20:09');


CREATE TABLE InternationalLaw
(
    regulation_id    INT AUTO_INCREMENT PRIMARY KEY,
    regulation_name  VARCHAR(255),
    publication_date DATE,
    description      TEXT,
    applicable_scope VARCHAR(255)
);
INSERT INTO InternationalLaw (regulation_name, publication_date, description, applicable_scope)
VALUES ('核安全法', '2023-01-15', '确保核设施和活动的安全性。', '国家'),
       ('环境保护法', '2023-02-20', '规范环境影响和污染控制。', '国家'),
       ('国际核废物处置协议', '2023-03-10', '跨境核废物处置协议。', '国际'),
       ('辐射监测标准', '2023-04-05', '规定辐射水平监测标准。', '国家'),
       ('核事故应急响应协议', '2023-05-18', '概述应对核事故的程序。', '国家'),
       ('核工作者健康安全法规', '2023-06-22', '确保核设施工作者的健康与安全。', '国家');

CREATE TABLE MainIncidents
(
    incident_id            INT AUTO_INCREMENT PRIMARY KEY,
    event_date             DATE,
    location               VARCHAR(255),
    incident_type          VARCHAR(255),
    description            TEXT,
    environmental_impact   TEXT,
    health_impact          TEXT,
    international_response TEXT
);

INSERT INTO MainIncidents (event_date, location, incident_type, description, environmental_impact, health_impact,
                              international_response)
VALUES ('2023-11-20', '福岛附近海域', '事故通报', '日本政府发布关于核排放的事故通报。', '周边海域生态系统受到直接冲击',
        '居民提高警觉，媒体广泛报道', '国际社群表示关切，要求提供更多数据和信息。'),
       ('2023-11-25', '太平洋沿岸', '边界国家关切', '邻国就核废水扩散表达关切，提出共同研究请求。',
        '边界海域渔业和生态系统受到威胁', '公众担忧水产品安全和健康问题', '国际社会加强对日本的环境监测要求。'),
       ('2023-11-26', '亚洲周边海域', '国际峰会讨论', '核废水问题成为国际峰会议题，多国呼吁联合行动。',
        '亚洲周边海域受到潜在威胁', '国际卫生组织呼吁加强健康监测', '部分国家提出谴责声明，要求日本停止排放核废水。'),
       ('2023-11-06', '福岛', '核污水排放', '日本政府宣布向大海排放核污水。', '海洋生态系统受到影响', '居民担忧健康风险',
        '国际社群对此表达担忧，呼吁透明沟通。'),
       ('2023-11-12', '东京湾', '海洋排放计划实施', '日本开始实施核污水向海洋排放计划。', '渔业受到直接影响',
        '公众关切水产品安全', '邻国就核排放提出抗议，要求紧急磋商。'),
       ('2023-11-15', '太平洋', '核废水扩散', '核废水扩散至太平洋各地。', '海洋生态系统受到广泛污染',
        '国内外关切核废水长期影响', '国际社会对日本核排放行为谴责，要求采取措施保护环境。');



CREATE TABLE Symptom
(
    effect_id             INT AUTO_INCREMENT PRIMARY KEY,
    health_condition      VARCHAR(100),
    radiation_exposure    DECIMAL(10, 2),
    cancer_incidence_rate DECIMAL(5, 2),
    genetic_mutations     TEXT,
    statistics_data       TEXT
);
INSERT INTO Symptom (health_condition, radiation_exposure, cancer_incidence_rate, genetic_mutations,
                           statistics_data)
VALUES ('白血病', 2.5, 3.8, '对核辐射敏感基因发生变异', '统计数据表明核事故地区白血病患者增加'),
       ('甲状腺癌', 1.8, 2.2, '甲状腺相关基因发生变异', '癌症发病率在核事故地区上升'),
       ('遗传突变', 3.2, 1.5, '家族中出现新的遗传突变', '遗传突变可能与核辐射有关'),
       ('心血管疾病', 1.5, 4.5, '辐射引起心血管系统问题', '辐射暴露与心血管疾病发病率关联'),
       ('生育异常', 2.8, 1.2, '辐射影响生育健康', '统计数据显示生育异常率上升'),
       ('呼吸系统疾病', 2.0, 3.0, '辐射引起呼吸问题', '核污染地区呼吸系统疾病增多');

CREATE TABLE CountriesReactionsToEvents
(
    ReactionID          INT PRIMARY KEY,
    EventID             INT,
    Country             VARCHAR(255),
    ReactionDescription TEXT
);

INSERT INTO CountriesReactionsToEvents (ReactionID, EventID, Country, ReactionDescription)
VALUES (2, 1, '美国',
        '美国政府就日本核废水处理问题发表了声明，要求日本提供更多关于处理过程的详细信息。声明中强调了对核安全和环境保护的重要性，呼吁国际社会共同努力解决这一问题。'),

       (3, 1, '中国',
        '中国政府对日本核废水排放表示关切，呼吁进行国际调查，确保处理过程的透明度和公正性。中国还强调了国际社会共同应对核安全挑战的必要性。'),

       (4, 2, '韩国',
        '韩国政府要求日本废水处理过程的透明度，对处理方式提出质疑。韩国暂时中断了与日本的外交谈判，并与国际社会协调行动，以确保核废水排放问题得到妥善解决。'),

       (5, 2, '俄罗斯',
        '俄罗斯政府对日本暂停外交谈判表示关切。俄罗斯强调了国际社会在核安全问题上的合作重要性，并呼吁各国共同努力应对核废水排放挑战。'),

       (6, 2, '德国',
        '德国政府提供在核废水处理方面的协助，包括技术支持和经验分享。德国呼吁国际社会加强合作，共同制定更严格的核安全标准和监管机制。'),

       (7, 3, '澳大利亚',
        '澳大利亚政府表达对日本的支持，并提供支持，包括分享先进的环境监测技术和协助应对可能出现的环境影响。澳大利亚强调国际合作对于解决核废水排放问题的重要性。'),

       (8, 3, '法国',
        '法国政府呼吁联合国召开紧急会议，共同讨论日本核废水排放问题。法国强调了国际社会在核安全领域的协作必要性，并提供支持协调国际行动。'),

       (9, 4, '加拿大',
        '加拿大政府要求进行独立调查，以评估日本核废水处理的安全性和环境影响。加拿大强调了透明度和公正性在核废水问题解决中的关键作用。'),

       (10, 4, '印度',
        '印度政府建议在核安全措施方面进行地区合作，以共同应对核废水排放的挑战。印度呼吁国际社会共同努力，确保核能的安全和可持续发展。'),

       (11, 5, '英国',
        '英国政府提供核废水处理方面的技术专业知识，并表示愿意与其他国家分享最佳实践。英国呼吁国际社会制定更严格的核废水排放标准，并共同努力维护全球核安全。'),

       (12, 5, '巴西',
        '巴西政府呼吁召开国际核安全大会，为全球核能安全提供平台。巴西表示将积极参与国际合作，共同应对核废水排放等核安全问题。');

CREATE TABLE PublicOpinionSurvey
(
    SurveyID      INT PRIMARY KEY,
    SurveyDate    DATE,
    SurveyResults TEXT
);
INSERT INTO PublicOpinionSurvey (SurveyID, SurveyDate, SurveyResults)
VALUES (1, '2023-11-05', '公众对日本核污水排放问题表达极大关切，认为这可能对环境和健康产生负面影响。'),
       (2, '2023-11-12', '调查显示公众对于日本核污水排放的信息透明度存在疑虑，希望政府提供更多详细信息。'),
       (3, '2023-11-20', '有人表示对日本政府的核污水处理计划表示支持，认为这是必要的决定。'),
       (4, '2023-11-27', '部分受访者对日本政府核污水排放的紧急响应措施表示不满，认为需要更加有力的行动。'),
       (5, '2023-11-30', '公众对国际社会对日本核污水问题的关注表示理解，呼吁国际合作解决这一挑战。'),
       (6, '2023-12-05', '有人提出建议，认为日本政府在核污水排放问题上应该听取公众意见，并进行更广泛的公众参与。'),
       (7, '2023-12-12', '一些受访者对日本政府对核污水问题的风险沟通方式提出批评，认为需要更加透明和及时的信息发布。'),
       (8, '2023-12-20', '有人呼吁日本政府与专业机构合作，进行独立的核污水影响评估，并公开评估结果。'),
       (9, '2023-12-27', '调查结果显示，公众对于核污水问题的长期影响存在担忧，希望政府采取有效措施确保环境和健康安全。'),
       (10, '2023-12-30', '有人表示对于核污水问题的解决需要国际社会共同努力，呼吁联合国等国际组织介入解决。'),
       (11, '2024-01-01', '公众对于核污水排放的技术处理方案提出质疑，认为需要进行更加全面和科学的评估。'),
       (12, '2024-01-02', '部分受访者对于日本政府的核污水排放决定表示支持，认为政府已经充分考虑了环境和人类健康的因素。');


```

