
/*Paso aqui un script que espero logres resolver:*/
 function generateUserByFullName(fullName)
    {
        var user = null;
        var temp = explode(' ', fullName);
        if (count(temp) > 0)
        {
            allowedVars = null;
            foreach (temp as value)
            {
                if (strlen(value) > 3)
                {
                    allowedVars[] = value;
                }
            }
        }
       var vars['FN'] = allowedVars[0];
       var vars['FI'] = substr(allowedVars[0], 0, 1);
 
       var vars['MN'] = allowedVars[1];
       var vars['MI'] = substr(allowedVars[1], 0, 1);
 
        if (isset(allowedVars[2]))
        {
           var vars['SN'] = allowedVars[2];
           var vars['SI'] = substr(allowedVars[2], 0, 1);
        }
        if (isset(allowedVars[3]))
        {
           var vars['LN'] = allowedVars[3];
          var vars['LI'] = substr(allowedVars[3], 0, 1);
        }
 
        var variants = array('FN', 'MN', 'SN', 'LN', 'FI', 'MI', 'SI', 'LI');
       //posibles variantes a seguir, que se utilizarán de forma aleatoria o que se prefiera
        var allowedConbinations = array(
            '4.2',
            '4.3',
            '4.2.3',
            '2.4',
            '3.4',
            '2.3.4',
            '3.2.4',
            '0.2',
            '0.3',
            '0.2.3',
            '2.0',
            '3.0',
            '2.3.0',
            '3.2.0',
            '0.6',
            '0.7',
            '0.6.7',
            '6.7.0',
            '7.6.0',
            '1.6.7',
            '6.7.1',
            '7.6.1',
            '5.2.3',
            '2.3.5',
            '3.2.5',
            '2.3.1',
            '3.2.1',
            '1.2.3',
            '5.2',
            '5.3',
            '2.5',
            '3.5',
            '1.2',
            '1.3',
            '2.1',
            '3.1',
            '1.6',
            '1.7',
            '4.5.2',
            '2.4.5',
            '4.5.3',
            '3.4.5',
            '4.5.2.3',
            '2.3.4.5',
            '3.2.4.5',
            '0.5.2',
            '0.5.3',
            '4.1.3',
            '0.5.2.3',
            '4.1.2.3',
            '2.3.0.5',
            '3.2.0.5',
            '2.3.4.1',
            '3.2.4.1'
        );
 
       var runVariants = explode('.', allowedConbinations[rand(0, count(allowedConbinations) - 1)]);
        if (count(runVariants) > 0)
        {
            var user = '';
            foreach (runVariants as value)
            {
                if (isset(vars[variants[value]]))
                {
                    if(strlen(user) <= 12)
                     {
                          user.= vars[variants[value]];
                     }
                }
            }
        }
        return user.'@sanfranciscoasis.cl';
    }