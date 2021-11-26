import LocalizedStrings from 'react-native-localization';
import en from '../EnglishLang';
import fr from '../FrenchLang';
import ar from '../ArabicLang';
// import hi from '../HindiLang';
import ru from '../RussianLang'

const strings = new LocalizedStrings({
  en,
  fr,
  ar,
  // hi,
  ru
});
 
export default strings;