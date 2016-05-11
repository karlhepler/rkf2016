New Contestant Registered!
----------------------------

Name: {{ $registrant->name }}
Email: {{ $registrant->email }}
Phone Number: {{ $registrant->phone }}
Date of Birth: {{ $registrant->dob->format('n/j/Y') }}
Address: {{ $registrant->address() }}
Agreed to rules: {{ $registrant->agreed() }}