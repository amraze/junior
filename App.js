import LoginComponent from './components/LoginComponent';
import HomeComponent from './components/HomeComponent';

import {NavigationContainer} from '@react-navigation/native';
import {createNativeStackNavigator} from '@react-navigation/native-stack';
const Stack = createNativeStackNavigator();

export default function App() {
  return (
    <NavigationContainer>
      <Stack.Navigator>
        <Stack.Screen options={{ headerShown: false }} name="Login" component={LoginComponent} />
        <Stack.Screen options={{ headerShown: false }} name="Home" component={HomeComponent} />
      </Stack.Navigator>
    </NavigationContainer>
  )
}