# ToR-API
## Check whether a user is on ToR network or not
The output of this file is a string (either 'Yes' or 'No').

## Logic
The php script sends IP of the remote-host (user who opens the php page) and the server timestamp in particular format to the public website which keeps log of all ToR nodes. This is one of the trusted means of identifying if the user is accessing the website via ToR network or otherwise.
