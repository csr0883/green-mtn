/********************************************************************
/*Chart Queries Row Queries******************************************
**These Queries drive the chars**************************************
/********************************************************************


/*Internet Access PIE Chart Stored Proceedure***********************/
SELECT
    CASE
        WHEN internet=1 THEN 'Has Internet'
        ELSE 'Does Not Have Internet'
    END AS 'internet',
    ROUND(AVG(G3),0) as 'G3'
FROM students
GROUP BY internet;
/********************************************************************/

/*Internet Access BAR Chart Query************************/
SELECT
        CASE
            WHEN internet=1 THEN 'Has Internet'
            ELSE 'Does Not Have Internet'
        END AS 'internet',
        COUNT(id) AS 'COUNT',
        CASE 
            WHEN internet=1 THEN '#dc3912' 
        END AS 'color'
FROM students
GROUP BY internet;
/********************************************************************/

/*Failure PIE Chart Query********************************************/
SELECT
	failures
	round(AVG(G3),0) AS 'G3'
FROM students
GROUP BY failures
/********************************************************************/

/*Failure PIE Chart Query********************************************/
SELECT
	failures,
	COUNT(ID) AS 'COUNT'
FROM students
GROUP By failures
/********************************************************************/

/*Study Time PIE Chart Query*****************************************/
SELECT
	CASE 
		WHEN studytime=1 THEN '2 HOURS' 
		WHEN studytime=2 THEN '2-5 HOURS'
		WHEN studytime=3 THEN '5-10 HOURS'
		WHEN studytime=4 THEN '10+ HOURS'
	END AS 'HOURS',
	COUNT(id) AS 'COUNT'
FROM students
GROUP BY studytime
/********************************************************************/

/*Study Time BAR Chart Query*****************************************/
SELECT
	CASE 
		WHEN studytime=1 THEN '2 HOURS' 
		WHEN studytime=2 THEN '2-5 HOURS'
		WHEN studytime=3 THEN '5-10 HOURS'
		WHEN studytime=4 THEN '10+ HOURS'
	END AS 'HOURS',
	round(AVG(G3),0) AS 'G3'
FROM students
GROUP BY studytime
/********************************************************************/

/*Absences PIE Chart Query*******************************************/
SELECT
	CASE
		WHEN absences<=5 THEN '1-5 Hours'
		WHEN absences>=6 AND absences<=10 THEN '6-10 Hours'
		WHEN absences>=11 AND absences<=15 THEN '11-15 Hours'
		WHEN absences>=16 AND absences<=20 THEN '16-20 Hours'
		WHEN absences>20 THEN '20+'
	END AS 'Absences',
	COUNT(id) AS 'ID'
FROM students
GROUP BY CASE
		WHEN absences<=5 THEN '1-5 Hours'
		WHEN absences>=6 AND absences<=10 THEN '6-10 Hours'
		WHEN absences>=11 AND absences<=15 THEN '11-15 Hours'
		WHEN absences>=16 AND absences<=20 THEN '16-20 Hours'
		WHEN absences>20 THEN '20+'
	END
/********************************************************************/	

/*Absences BAR Chart Query*******************************************/
SELECT
	CASE
		WHEN absences<=5 THEN '1-5 Hours'
		WHEN absences>=6 AND absences<=10 THEN '6-10 Hours'
		WHEN absences>=11 AND absences<=15 THEN '11-15 Hours'
		WHEN absences>=16 AND absences<=20 THEN '16-20 Hours'
		WHEN absences>20 THEN '20+ Hours'
	END AS 'Absences',
	round(AVG(g3),0) AS 'G3'
FROM students
GROUP BY CASE
		WHEN absences<=5 THEN '1-5'
		WHEN absences>=6 AND absences<=10 THEN '6-10 Hours'
		WHEN absences>=11 AND absences<=15 THEN '11-15 Hours'
		WHEN absences>=16 AND absences<=20 THEN '16-20 Hours'
		WHEN absences>20 THEN '20+ Hours'
	END

/*Travel Time PIE Chart Query****************************************/
SELECT 
    COUNT(ID) AS 'COUNT', 
    round(AVG(g3),0) AS 'G3',
    CASE 
		WHEN traveltime=1 THEN '1-15 Minutes' 
        WHEN traveltime=2 THEN '15-30 Minutes' 
        WHEN traveltime=3 THEN '30-60 Minutes' 
        WHEN traveltime=4 THEN '60+ Minutes'
	END AS traveltime 
FROM students
GROUP BY traveltime
/********************************************************************/


/*Travel Time BAR Chart Query************************/
SELECT 
    COUNT(ID) AS 'COUNT', 
    round(AVG(g3),0) AS 'G3',
    CASE 
		WHEN traveltime=1 THEN '1-15 Minutes' 
        WHEN traveltime=2 THEN '15-30 Minutes' 
        WHEN traveltime=3 THEN '30-60 Minutes' 
        WHEN traveltime=4 THEN '60+ Minutes'
	END AS traveltime 
FROM students
GROUP BY traveltime
/********************************************************************/

/*Overall Health Bar Chart Query*************************************/
SELECT 
    CASE 
    	WHEN health=1 THEN 'Very Bad' 
    	WHEN health=2 THEN 'Bad' 
    	WHEN health=3 THEN 'Normal' 
    	WHEN health=4 THEN 'Good'
    	WHEN health=5 THEN 'Very Good' 
    END AS health,
    round(AVG(G1),0) AS 'G1', 
    round(AVG(G2),0) AS 'G2', 
    round(AVG(G3),0) AS 'G3'
FROM students
GROUP BY health
/********************************************************************/


/********************************************************************
/*Page Row Queries & Stored Proceedures******************************
**These Queries display the table data on the page*******************
********************************************************************/

/*Internet Access***************************************************/

SELECT 
	ID, 
	G1 as 'GRADE 1', 
	G2 as 'GRADE 2',
	G3 as 'GRADE 3', 
	CASE 
	    WHEN internet = 1 
	    THEN 'YES' 
	    ELSE 'NO' 
    END AS 'HAS INTERNET' 
FROM `students` 
ORDER BY `id` ASC;
END
/********************************************************************/

/*2: Fail Rate*******************************************************/
SELECT 
    ID, 
    G1, 
    G2, 
    G3, 
    absences 
FROM students;
/********************************************************************/

/*3: Study Time******************************************************/
 SELECT 
    ID, 
    G1, 
    G2, 
    G3, 
    CASE 
        WHEN studytime=1 THEN '1-2 Hours' 
        WHEN studytime=2 THEN '2-5 Hours' 
        WHEN studytime=3 THEN '5-10 Hours' 
        WHEN studytime=4 THEN '10+ Hours'
    End AS `studytime` 
FROM `students`;
/********************************************************************/

/*4: Absences********************************************************/
SELECT 
    ID, 
    G1, 
    G2, 
    G3, 
    absences 
FROM students;
/********************************************************************/