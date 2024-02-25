import { Text, View, TextInput, TouchableOpacity} from 'react-native';
import styles from './LoginComponent.module.jsx';

export default function LoginComponent({navigation}) {
    function navigateToHome(){
        navigation.navigate('Home');
    }
    
    return (
        <View style={styles.container}>
            <View style={styles.header_container}>
                <Text style={styles.header_text}>Welcome to {'\n'} EnetcomJE</Text>
            </View>

            <View style={styles.body_container}>
                <TextInput style={styles.input} placeholder="Email" />
                <TextInput style={styles.input} placeholder="Password" />
                <TouchableOpacity style={styles.button} onPress={navigateToHome}>
                    <Text style={styles.button_text}>Login</Text>
                </TouchableOpacity>
            </View>

            <View style={styles.footer_container}>
                <Text style={styles.footer_text}>&copy; EnetcomJE</Text>
            </View>
        </View>
    );
}