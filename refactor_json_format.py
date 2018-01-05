# This script is meant to refactor the original file into the new format.
# The idea is to make the formatting more consistent by removing redundant
# and unnecessary list organization for the municipalities.

# In effect, only dictionaries are used all throughout the file, except
# for the barangays which are still in list format


import json

JSON_FILE = "./philippine_provinces_cities_municipalities_and_barangays_2016.json"

with open(JSON_FILE) as json_file:
    data = json.load(json_file)

modified_dict = {}

for region_key, region_contents in data.items():
    modified_dict[region_key] = {}
    modified_dict[region_key]["region_name"] = region_contents["region_name"]
    modified_dict[region_key]["province_list"] = {}
    for province_key, province_contents in region_contents["province_list"].items():
        modified_dict[region_key]["province_list"][province_key] = {}
        modified_dict[region_key]["province_list"][province_key]["municipality_list"] = {}
        for municipality_item in province_contents["municipality_list"]:
            for municipality_key, municipality_contents in municipality_item.items():
                modified_dict[region_key]["province_list"][province_key]["municipality_list"][municipality_key] = municipality_contents

with open(JSON_FILE, "w") as outfile:
    json.dump(modified_dict, outfile, indent=2)
