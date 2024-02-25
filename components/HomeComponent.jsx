import { View, Text, Image, ScrollView, Modal } from 'react-native';
import { Card, Button, Icon } from 'react-native-elements';
import { useState, useEffect } from 'react';
import users_data from '../data/users';

import styles from './HomeComponent.module';

export default function HomeComponent() {
    const [modalOpened, setModalOpened] = useState(false);
    const [selectedUser, setSelectedUser] = useState({});
    const [users, setUsers] = useState([]);
    
    useEffect(() => {
        setUsers(users_data);
        console.log(users);
    }, [users])
    
    
    function toggleModal(user){
        if (modalOpened == true){
            setModalOpened(false);
        } else {
            setSelectedUser(user);
            setModalOpened(true);
        }
    }
    
    return (
        <View>
            <ScrollView>
                {(modalOpened) && (
                    <Modal>
                        <View>
                        <Image style={styles.modal_image} source={{uri:selectedUser.image_url }}/>
                        </View>
                        <View style={styles.modal_container}>
                        <Text style={{marginBottom: 10, fontWeight: "bold"}}>
                            {selectedUser.title}
                        </Text>
                        <Text style={{marginBottom: 20}}>
                            {selectedUser.name}
                        </Text>
                        <Text style={{marginBottom: 10}}>
                            {selectedUser.description}
                        </Text>
                        <Button
                            buttonStyle={{borderRadius: 0, marginLeft: 0, marginRight: 0, marginBottom: 0}}
                            title='GO BACK' onPress={toggleModal} />
                        </View>
                    </Modal>
                )}
                <View style={styles.header_component}>
                    <View>
                        <Text style={styles.header_text}>Welcome, </Text>
                    </View>
                    <View style={styles.header_image}>
                        <Image style={styles.image} source={{uri:"https://cdn.pixabay.com/photo/2012/04/13/21/07/user-33638_640.png" }} /> 
                    </View>
                </View>
                <View>

                {users.map((user)=> 
                        <Card>
                            <Card.Title>{user.title}</Card.Title>
                            <Card.Divider/>
                            <Card.Image style={styles.card_image} source={{uri:user.image_url }} />
                            <Text style={{marginTop: 10, fontWeight:"bold"}}>
                                {user.name} 
                            </Text>
                            <Text style={{marginTop: 10, marginBottom:10}}>
                                {user.description}
                            </Text>
                            <Button
                                buttonStyle={{borderRadius: 0, marginLeft: 0, marginRight: 0, marginBottom: 0}}
                                title='VIEW NOW' onPress={() => toggleModal(user)}/>
                        </Card>
                    )}
                </View>
        </ScrollView>
        </View>
    )
}