# List of Philippine Regions, Provinces, Cities, Municipalities, and Barangays

### Download
Get the version 3 file here: [philippine_provinces_cities_municipalities_and_barangays_2017.json](./philippine-regions-provinces-cities-municipalities-barangays/philippine_provinces_cities_municipalities_and_barangays_2016_v2.json)

### How to use, and notes on format

The file is in json format, and should be accessible to most languages. For python users, it can be loaded using the json library.

```python
import json
with open("/path/to/file/philippine_provinces_cities_municipalities_and_barangays_2017.json") as myjsonfile:
    mydata = json.load(myjsonfile)  
```
An overview of the structure:        
![structure](./structure.png "Structure")

Region keys are of the string values "01", "02", "03", "4A", "4B, "05", "06", "07", "08", "09", "10", "11", "12", "13", "ARMM", "CAR", "NCR", (and "NIR" for version 2).

1. Each region has the following properties: 

    1. A "region_name" property which maps to a string
        - example: `"region_name": "REGION XIII"`
    2. A "province_list" property which maps to a dictionary that has the province name in all caps as the keys
        - example: `"province_list": { BATANGAS:{ ... }, "CAVITE":{ ... },  ... }` 
2. Each province has the following property:
    1. A "municipality_list" which maps to a dictionary containing municipality names in all caps as the keys
        - example: `"municipality_list": { "BACOLOD CITY": { ... }, "BAGO CITY": { ... },  "BINALBAGAN" { ... }, ...}` 
3. Each municipality has the following property:
    1. A "barangay_list" which maps to a list containing the barangay names
        - example: `"barangay_list": ["AMPUCAO", "DALUPIRIP", "GUMATDANG", ...]`
        
### What is this?

This is a nested list  of Philippine regions, provinces, cities/municipalities and barangays in json format.

### Why?

Getting an authoritative list of Philippine geographical areas can be pretty tedious and challenging.

### Is this accurate?

Short answer: Yes, it is accurate.

Long answer:
- It was definitely accurate as of 9 May 2016, the date of the 2016 Philippine elections. Or at least, it was as 
accurate as the COMELEC records for that election. This data is available in the [version 2 file](./philippine-regions-provinces-cities-municipalities-barangays/philippine_provinces_cities_municipalities_and_barangays_2016_v2.json) .
- However, one major change that occured since then is the dissolution of the Negros Island Region (NIR) in the Visayas on
August 9, 2017. Due to this dissolution, the province of Negros Occidental reverted to Western Visayas (Region VI), and 
the province of Negros Oriental reverted to Central Visayas (Region VII). This change is reflected in the [version 3 file](./philippine-regions-provinces-cities-municipalities-barangays/philippine_provinces_cities_municipalities_and_barangays_2017.json)
- The only warning we have for this resource is that if any municipalities or barangays have either been created, 
renamed, moved, or destroyed since the 2016 elections, such changes would not be reflected on this resource. If you know
of any such changes, feel free to make a pull request, so that we can have it fixed.

### Obligatory disclaimer
Data is provided as is and without guarantees.  It should however be fairly accurate, as it is based on the 2016 Comelec 
election data along with the single modificiation of regroupging the component provinces of the Negros Island Region