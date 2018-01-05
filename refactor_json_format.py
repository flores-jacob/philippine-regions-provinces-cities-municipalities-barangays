# This script is meant to refactor the original file into the new format.
# The idea is to make the formatting more consistent by removing redundant
# and unnecessary list organization for the municipalities.

# In effect, only dictionaries are used all throughout the file, except
# for the barangays which are still in list format

from collections import OrderedDict
import json

JSON_FILE = "./philippine_provinces_cities_municipalities_and_barangays_2016.json"
NEW_JSON_FILE = "./philippine_provinces_cities_municipalities_and_barangays_2016_v2.json"

with open(JSON_FILE) as json_file:
    data = json.load(json_file)

modified_dict = {}

for region_key, region_contents in data.items():
    modified_dict[region_key] = {}
    modified_dict[region_key]["region_name"] = region_contents["region_name"]
    modified_dict[region_key]["province_list"] = {}
    modified_province_list = modified_dict[region_key]["province_list"]
    province_dict = region_contents["province_list"]
    for province_key, province_contents in province_dict.items():
        modified_province_list[province_key] = {}
        modified_province_list[province_key]["municipality_list"] = {}
        modified_municipality_list = modified_province_list[province_key]["municipality_list"]
        for municipality_item in province_contents["municipality_list"]:
            for municipality_key, municipality_contents in sorted(municipality_item.items(), key=lambda x: x[0]):
                modified_municipality_list[municipality_key] = municipality_contents

        # sort by municipality name
        modified_dict[region_key]["province_list"][province_key]["municipality_list"] = OrderedDict(sorted(modified_municipality_list.items(), key=lambda x: x[0]))

    # sort by province name
    modified_dict[region_key]["province_list"] = OrderedDict(sorted(modified_province_list.items(), key=lambda x: x[0]))

# sort by region
modified_dict = OrderedDict(sorted(modified_dict.items(), key=lambda x: x[0]))

with open(NEW_JSON_FILE, "w") as outfile:
    json.dump(modified_dict, outfile, indent=2)
